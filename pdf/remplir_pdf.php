<?php
require('fpdm.php');
require_once('Models\studentModel.php');
$Etudiant = SelectEtudiant();
$Parents = SelectParent();
//Tableau contenant les paramètres à passer au PDF
$fields = array(
    'Current_année' => date('Y') ,
    'next_année' => date('Y')+1,
    'Nom' =>  $Etudiant['nom'] ,
    'Prénom' => $Etudiant['prenom'],
    'Nom_jeune_fille' => $Etudiant['nom_jeune_fille'],
    'Date_naissance' => $Etudiant['ddn'],
    'Lieu_naissance' => $Etudiant['lieu_ddn'],
    'Adresse_etudiant' => $Etudiant['libelle_adresse'],
    'Ville_E' => $Etudiant['Ville'],
    'Code_Postal_E' => $Etudiant['codepostal'],
    'Email_E' => $Etudiant['mail'],
    'Telephone_E' => $Etudiant['tel'],
    'Mobile_E' => $Etudiant['portable'],
    'Adresse_parents' => $Parents['nom'],
    'Ville_P' => $Parents['nom'],
    'Code_Postal_P' => $Parents['nom'],
    'Email_P' => $Parents['nom'],
    'Telephone_P' => $Parents['nom'],
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