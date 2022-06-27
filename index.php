<?php
if (isset($_REQUEST['useCase'])) {
    $useCase = $_REQUEST['useCase'];
    switch ($useCase) {
        case'student':
            include('Controllers/studentController.php');
            break;
        case 'logInView':
            include ('Views\login.php');
    }
} else {
    include('Views/homepage.php');
}

