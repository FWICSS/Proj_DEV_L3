<?php
require_once('Models\studentModel.php');
if (isset($_REQUEST['action'])) {
    $action = $_REQUEST['action'];
    switch ($action) {
        case 'register':
        $verifemail = verifemail($_REQUEST['mail'];);
        if($verifemail != null){
            $message = "Un compte existe déja";
            }

            if($_REQUEST["password"] === $_REQUEST["passwordRepeat"]){
                if ((preg_match('#^(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9]).{8,}$#', $_REQUEST["password"]))
                    || (preg_match('#^(?=.*[a-z])(?=.*[0-9])(?=.*\W).{8,}$#', $_REQUEST["password"]))
                    || (preg_match('#^(?=.*[a-z])(?=.*[A-Z])(?=.*\W).{8,}$#', $_REQUEST["password"]))
                    || (preg_match('#^(?=.*[A-Z])(?=.*[0-9])(?=.*\W).{8,}$#', $_REQUEST["password"]))) {
                    $lastName = $_REQUEST['lastName'];
                    $firstName = $_REQUEST['firstName'];
                    $mail = $_REQUEST['mail'];
                    $password = $_REQUEST['password'];
                    $count = createNewStudent($firstName,$lastName,$mail,$password);
                    if ($count === true){
                        $message = "Votre compte à été crée, connectez-vous";
                        include_once ('Views\sucessesMessages.php');
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

            break;
        case 'logIn':

    }


}