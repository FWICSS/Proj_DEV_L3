<?php
require_once('Models\studentModel.php');
if (isset($_REQUEST['action'])) {
    $action = $_REQUEST['action'];
    switch ($action) {
        case 'register':
            $emailExist = emailExist($_REQUEST['mail']);

            if ($emailExist != 0) {
                $message = "Un compte existe déja avec cet e-mail";
                include_once('Views\errorsMessages.php');
                include_once('Views\homepage.php');
            } else {
                if ($_REQUEST["password"] === $_REQUEST["passwordRepeat"]) {
                    if ((preg_match('#^(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9]).{8,}$#', $_REQUEST["password"]))
                        || (preg_match('#^(?=.*[a-z])(?=.*[0-9])(?=.*\W).{8,}$#', $_REQUEST["password"]))
                        || (preg_match('#^(?=.*[a-z])(?=.*[A-Z])(?=.*\W).{8,}$#', $_REQUEST["password"]))
                        || (preg_match('#^(?=.*[A-Z])(?=.*[0-9])(?=.*\W).{8,}$#', $_REQUEST["password"]))) {
                        $lastName = $_REQUEST['lastName'];
                        $firstName = $_REQUEST['firstName'];
                        $login = strtolower($lastName) . '.' . strtolower($firstName);
                        $mail = $_REQUEST['mail'];
                        $password = $_REQUEST['password'];
                        addEmail($mail);
                        $count = createNewStudent($lastName, $firstName, $login, $password, $mail);
                        if ($count === true) {
                            $message = "Votre compte à été crée, connectez-vous";
                            include_once('Views\sucessesMessages.php');
                        }
                        include_once('Views\login.php');
                    } else {
                        $message = "Votre mdp doit contenir au moins 8 caractères et au moins 3 des 4 catégories de caractères (majuscules, minuscules, chiffres, caractères spéciaux)!";
                        include_once('Views\errorsMessages.php');
                        include_once('Views\homepage.php');
                    }
                } else {
                    $message = " Les mots de passes ne correspondent pas";
                    include_once('Views\errorsMessages.php');
                    include_once('Views\homepage.php');
                }
            }
            break;
        case 'logIn':
            if (isset($_REQUEST['login'], $_REQUEST['password'])) {
                $login = $_REQUEST['login'];
                $password = $_REQUEST['password'];
                $student = getLogInInfosStudent($login, $password);
                if ($student == null) {
                    $message = "Login ou mot de passe incorrect";
                    include('Views\errorsMessages.php');
                    include_once('Views\login.php');
                } else {
                    $id = $student['id'];
                    $nom = $student['nom'];
                    $prenom = $student['prenom'];
                    $mail = $student['mail'];
                    logIn($id, $nom, $prenom, $mail);
                    include('Views\registerMiageForm.php');
                }
            }
            break;
        case 'firstForm':
            $maidenName = $_REQUEST['maidenName'];
            $dateOfBirth = $_REQUEST['dateOfBirth'];
            $placeOfBirth = $_REQUEST['placeOfBirth'];
            updateStudentInfos($maidenName, $dateOfBirth, $placeOfBirth);

            $lblAddress = $_REQUEST['lblAddress'];
            $lblCity = $_REQUEST['lblCity'];
            $lblCodePostal = $_REQUEST['lblCodePostal'];
            $tel = $_REQUEST['tel'];
            $phone = $_REQUEST['phone'];
            updateAddressStudentInfos($lblAddress, $lblCity, $lblCodePostal, $tel, $phone);
            include('Views\registerMiageForm2.php');
            break;
    }
}