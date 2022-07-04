<?php
require_once('Models\parentModel.php');
if (isset($_REQUEST['action'])) {
    $action = $_REQUEST['action'];
    switch ($action) {
        case 'form_2':
            if(isset($_REQUEST['lblParentAddress'], $_REQUEST['lblParentCity'],$_REQUEST['lblParentCodePostal'],$_REQUEST['parentMail'],$_REQUEST['parentTel'])){
                $lblParentAddress = $_REQUEST['lblParentAddress'];
                $lblParentCity = $_REQUEST['lblParentCity'];
                $lblParentCodePostal = $_REQUEST['lblParentCodePostal'];
                $parentMail = $_REQUEST['parentMail'];
                $parentTel = $_REQUEST['parentTel'];
                insertAdressParentInfos($lblParentAddress, $lblParentCity, $lblParentCodePostal, $parentMail, $parentTel);
                $res = getIdAdressByParent($parentMail);
                linkParentWithAddress($parentMail);
                include('Views\registerMiageForm3.php');
            };
            break;
    }
}