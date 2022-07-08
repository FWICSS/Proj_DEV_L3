<!doctype html>
<html lang="fr">
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="">
<title>Miage Antilles</title>
<link href="css/bootstrap.css" rel="stylesheet">
<script src="js/bootstrap.bundle.js"></script>
<script src="js/bootstrap.js"></script>
<script src="js/fetchEtudiant.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>

<script>
    function showUser(str) {
        if (str == "") {
            document.getElementById("txtHint").innerHTML = "";
            return;
        } else {
            var xmlhttp = new XMLHttpRequest();
            xmlhttp.onreadystatechange = function () {
                if (this.readyState == 4 && this.status == 200) {
                    document.getElementById("txtHint").innerHTML = this.responseText;
                }
            };
            xmlhttp.open("GET", "views/getetudiant.php?q=" + str, true);
            xmlhttp.send();
        }
    }
</script>

<link href="styles/styles.css" rel="stylesheet">
<link rel="icon" href="assets/world.png"/>
<header>
    <nav class="navbar navbar-light bg-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="index.php">
                <img src="assert/logo.png" alt="miage-antilles" width="100" height="50">
            </a>
            <?php if (isset($_SESSION['idStudent'])) {
                echo('Bonjour, ' . $_SESSION['nom'] . ' ' . $_SESSION['prenom']);
            } ?>

            <div>
                <div>
                    <?php if (!isset($_SESSION['idStudent']) && !isset($_SESSION['idAdmin'])) {
                        include('Views\espaceAdminButton.php');
                    } ?>
                </div>

                <div class="d-flex">
                    <?php if(isset($_SESSION['idStudent'])||isset($_SESSION['idAdmin'])) {
                        include('Views\logOutBtn.php');
                    } ?>
                </div>
            </div>
        </div>
    </nav>
</header>
<body>