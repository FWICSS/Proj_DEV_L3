<?php
include_once('header.php');
?>

<div class="container bg-white rounded-3 border border-5 shadow mt-3 ps-lg-5 pe-lg-5 pb-5">
    <div class="py-5 text-center">
       <h2> <?php if (isset($_SESSION['idAdmin'])){
            echo('Bonjour, ' . $_SESSION['prenom'] . ' ' . $_SESSION['nom']); }?></h2>
    </div>

    <div class="container">
        <p>Le nombre de candidature à la formation L3 MIAGE est de <b> <?php if (isset($_SESSION['idAdmin'])){
            $nbetudiant = getNBEtudiant();
            echo $nbetudiant['NBEtudiant'];
            }?> candidatures.</b></p>
        <h2>Sélectionner un étudiant : </h2>

        <select  class="form-select" aria-label="Default select example" id="etudiant" onchange="">
            <?php
                $listeEtudiant = getListeEtudiant();
                $x = 0;
                while($x <= 2){
                        {
                         echo "<option value='" . $listeEtudiant['nom'] . "'>" . $listeEtudiant['prenom'] . "
                         </option>";
                        }
                }
                ?>
            ?>
        </select>

    </div>


</div>