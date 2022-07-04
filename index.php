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
            unset($_SESSION['idStudent']);
            unset($_SESSION['nom']);
            unset($_SESSION['prenom']);
            include('Views\login.php');
            break;
        case 'parent':
            include ('Controllers\parentController.php');
            break;
    }
} else {
    if (isset($_SESSION['idStudent'])) {
        include('Views/registerMiageForm.php');
    } else {
        include('Views/homepage.php');
    }
}

