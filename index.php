<?php
if (session_id() == "") {
    session_start();
}
if (isset($_REQUEST['useCase'])) {
    $useCase = $_REQUEST['useCase'];

    switch ($useCase) {
        case'student':
            include('Controllers/studentController.php');
            break;
        case 'logInView':
            include('Views\login.php');
            break;
        case 'logOut':
            session_destroy();
            if (isset($_SESSION['idAdmin'])) {
                unset($_SESSION['idAdmin']);
                unset($_SESSION['nom']);
                unset($_SESSION['prenom']);
                include('Views\adminLogin.php');

            }else if(isset($_SESSION['idStudent'])) {
                unset($_SESSION['idStudent']);
                unset($_SESSION['nom']);
                unset($_SESSION['prenom']);
               include('Views\login.php');
            }
            break;
        case 'parent':
            include('Controllers\parentController.php');
            break;
        case 'admin':
            include('Controllers\adminController.php');
            break;

    }
} else {
    if (isset($_SESSION['idStudent'])) {
        include('Views/registerMiageForm.php');
    } else {
        include('Views/homepage.php');
    }
}