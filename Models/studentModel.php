<?php
require_once('Model.php');
function createNewStudent($nom, $prenom, $login, $password, $mail)
{
    global $database;
    $query = "INSERT INTO etudiant(adr_id,nom, prenom, login, password) VALUES ((SELECT ID FROM adresse where mail ='$mail'),'$nom','$prenom','$login','$password')";
    $stmt = $database->prepare($query);
    $count = $stmt->execute();
    return $count;
}

function emailExist($mail)
{
    global $database;
    $query = "SELECT count(*) from adresse WHERE mail = '$mail'";
    $res = $database->query($query);
    $count = $res->fetchColumn();
    return $count;
}

function addEmail($mail)
{
    global $database;
    $query = "INSERT INTO adresse(mail) VALUES ('$mail')";
    $stmt = $database->prepare($query);
    $stmt->execute();
}

function getLogInInfosStudent($login, $password)
{
    global $database;
    $query = "SELECT etudiant.id, etudiant.nom, etudiant.prenom FROM etudiant WHERE etudiant.login='$login' and etudiant.password='$password'";
    $req = $database->prepare($query);
    $req->execute();
    $ligne = $req->fetchall();
    return $ligne;
}

/**  function connect($id,$nom,$prenom){
    session_start();
    $_SESSION['idStudent'] = $id;
    $_SESSION['nom'] = $nom;
    $_SESSION['prenom'] = $prenom;
}*/