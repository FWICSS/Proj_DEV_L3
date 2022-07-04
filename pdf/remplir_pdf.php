<?php
require('fpdm.php');
global $database;
$id = $_SESSION['idStudent'];
//Tableau contenant les paramètres à passer au PDF
$fields = array(
    'Current_année' => date('Y') ,
    'next_année' => date('Y')+1,
    'Nom' =>  $_SESSION['nom'] ,
    'Prénom' => $_SESSION['prenom'],
    'Nom_jeune_fille' => $_SESSION['nom'],
    'Date_naissance' => $_SESSION['nom'],
    'Lieu_naissance' => $_SESSION['nom'],
    'Adresse_etudiant' => $_SESSION['nom'],
    'Ville_E' => $_SESSION[''],
    'Code_Postal_E' => $_SESSION['nom'],
    'Email_E' => $_SESSION['nom'],
    'Telephone_E' => $_SESSION['nom'],
    'Mobile_E' => $_SESSION['nom'],
    'Adresse_parents' => $_SESSION['nom'],
    'Ville_P' => $_SESSION['nom'],
    'Code_Postal_P' => $_SESSION['nom'],
    'Email_P' => $_SESSION['nom'],
    'Telephone_P' => $_SESSION['nom'],
);

//Le paramètre correspond au chemin vers le formulaire PDF
$pdf = new FPDM('Candidature.pdf');
$pdf->Load($fields, false); // le second paramètre vaut false si les valeurs sont en ISO-8859-1, vrai si UTF-8
$pdf->Merge();

/*
Le premier paramètre peut prendre 4 valeurs :
D pour que l’utilisateur soit obligé de télécharger le fichier
I pour afficher le fichier dans le navigateur
F pour sauvegarder le document en local
S pour retourner le document en tant que chaine de caractère.
Le deuxième paramètre est le nom du fichier
*/
$pdf->Output("I",  $id+"_questionnaire.pdf");
$pdf->Output("F",  $id+"_questionnaire.pdf");
$pdf->Output("D",  $id+"_questionnaire.pdf");