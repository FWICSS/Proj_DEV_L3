<?php
require_once('Models\adminModel.php');

if (isset($_REQUEST['action'])) {
    $action = $_REQUEST['action'];
    switch ($action) {
        case 'logInAdmin':
            if (isset($_REQUEST['login'], $_REQUEST['password'])) {
                $login = $_REQUEST['login'];
                $password = $_REQUEST['password'];
                $admin = getLogInInfosAdmin($login, $password);
                if ( $admin == null) {
                $message = "Login ou mot de passe incorrect";
                include('Views\errorsMessages.php');
                include_once('Views\adminLogin.php');
            } else {
                $id = $admin['id_admin'];
                $nom = $admin['nom'];
                $prenom = $admin['prenom'];
                logIn($id, $nom, $prenom);
                include('Views\adminDashboard.php');
               }
            }
            break;

        case 'espaceAdmin':
            include ('Views\adminLogin.php');
            break;
    }
}