<?php
$Etudiant = SelectEtudiant();
$message="";
if(asset($_POST["valider"])){
    /// recupère le nom du fichier au input : nom_input
    $message="Nom du fichier: ".$_FILES["nom_input"]["name"];

    //modifier stockage sur serveur
    //premier paramètre source
    //tmp_nam : stockage temporaire géré par php
    if(move_uploaded_file($_FILES["nom_input"]["tmp_name"],"C:/UwAmp/www/Proj_DEV_L3/document".$Etudiant['login'].$_FILES["nom_input"]["name"]))
    {chmod("C:/UwAmp/www/Proj_DEV_L3/document".$Etudiant['login'].$_FILES["nom_input"]["name"],0644);
        $message.=<li>Fichier chargé avec succès</li>
    }else
        $message.=<li>Erreur de chargement</li>
    /// mettre en base l'url vers le stockage :
    $url.$_FILES["nom_input"]["name"] = "C:/UwAmp/www/Proj_DEV_L3/document".$Etudiant['login'].$_FILES["nom_input"]["name"];
}
