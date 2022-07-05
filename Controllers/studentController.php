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
                    $message = "Les mots de passes ne correspondent pas";
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
        case 'form_3':
            if (isset($_REQUEST['serie'], $_REQUEST['mention'], $_REQUEST['year'], $_REQUEST['place'])) {
                $idStudent = $_SESSION['idStudent'];
                $serie = $_REQUEST['serie'];
                $mention = $_REQUEST['mention'];
                $year = $_REQUEST['year'];
                $place = $_REQUEST['place'];
                insertBacDiplome($idStudent, $serie, $mention, $year, $place);
                include('Views\registerMiageForm4.php');
            }
            break;
        case 'form_4':
            // Récupération des champs du formulaire n°4
            $intitule_1 = $_REQUEST['intitule_1'];
            $intitule_2 = $_REQUEST['intitule_2'];
            $intitule_3 = $_REQUEST['intitule_3'];

            $annee_obtention_1 = $_REQUEST['annee_obtention_1'];
            $annee_obtention_2 = $_REQUEST['annee_obtention_2'];
            $annee_obtention_3 = $_REQUEST['annee_obtention_3'];

            $place_1 = $_REQUEST['place_1'];
            $place_2 = $_REQUEST['place_2'];
            $place_3 = $_REQUEST['place_3'];

            $average_1 = $_REQUEST['average_1'];
            $average_2 = $_REQUEST['average_2'];
            $average_3 = $_REQUEST['average_3'];

            $idStudent = $_SESSION['idStudent'];

            insertCycle($idStudent, $intitule_1, $annee_obtention_1, $place_1, $average_1);
            insertCycle($idStudent, $intitule_2, $annee_obtention_2, $place_2, $average_2);
            insertCycle($idStudent, $intitule_3, $annee_obtention_3, $place_3, $average_3);
            include('Views\registerMiageForm5.php');
            break;
    }
}