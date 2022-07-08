<?php
require_once('Models\parentModel.php');
if (isset($_REQUEST['action'])) {
    $action = $_REQUEST['action'];
    switch ($action) {
        case 'form_2':
            if (isset($_REQUEST['lblParentAddress'], $_REQUEST['lblParentCity'], $_REQUEST['lblParentCodePostal'], $_REQUEST['parentMail'], $_REQUEST['parentTel'])) {
                $emailExist = emailExist($_REQUEST['parentMail']);
                if ($emailExist != 0) {
                    $message = "Ce mail existe déja en base";
                    include_once('Views\errorsMessages.php');
                    include_once('Views\registerMiageForm2.php');
                } else {
                    $lblParentAddress = $_REQUEST['lblParentAddress'];
                    $lblParentCity = $_REQUEST['lblParentCity'];
                    $lblParentCodePostal = $_REQUEST['lblParentCodePostal'];
                    $parentMail = $_REQUEST['parentMail'];
                    $parentTel = $_REQUEST['parentTel'];
                    insertAdressParentInfos($lblParentAddress, $lblParentCity, $lblParentCodePostal, $parentMail, $parentTel);
                    $idAddress = getIdAddress($parentMail);
                    linkAddressWithParent($parentMail);
                    linkStudentWithParent($parentMail);

                    include('Views\registerMiageForm3.php');
                }
            };
            break;
    }
}