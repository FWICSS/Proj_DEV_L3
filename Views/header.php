<!doctype html>
<html lang="fr">
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="">
<title>Miage Antilles</title>
<link href="css/bootstrap.css" rel="stylesheet">
<script src="js/bootstrap.bundle.js"></script>
<script src="js/bootstrap.js"></script>
<link href="styles/styles.css" rel="stylesheet">
<main class="main">
    <header>
        <nav class="navbar navbar-light bg-light">
            <div class="container-fluid">
                <a class="navbar-brand" href="index.php">
                    <img src="assert/logo.png" alt="miage-antilles" width="100" height="50">
                </a>
                <form class="d-flex">
                        <?php if(isset($_SESSION['idStudent'])){include ('Views\logOutBtn.php');} ?>
                </form>
            </div>
        </nav>
    </header>





