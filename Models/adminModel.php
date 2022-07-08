<?php

require_once('Model.php');

function getLogInInfosAdmin($login, $password)
{
    global $database;
    $query = "SELECT admin.id_admin, admin.nom, admin.prenom FROM admin  WHERE admin.login='$login' AND admin.password='$password'";
    $req = $database->prepare($query);
    $req->execute();
    $ligne = $req->fetch();
    return $ligne;
}

function logIn($id, $nom, $prenom)
{
    $_SESSION['idAdmin'] = $id;
    $_SESSION['nom'] = $nom;
    $_SESSION['prenom'] = $prenom;
}

function getNBEtudiant()
{
    global $database;
    $query = "SELECT count(*) as NBEtudiant FROM etudiant";
    $stmt = $database->query($query);
    $count = $stmt->fetch();
    return $count;
}

function getListeEtudiant()
{
    global $database;
    $query = "SELECT Distinct id, nom , prenom FROM etudiant";
    $req = $database->prepare($query);
    $req->execute();
    $ligne = $req->fetchAll();
    return $ligne;
}