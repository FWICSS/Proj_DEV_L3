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
    $query = "SELECT etudiant.id, etudiant.nom, etudiant.prenom, adresse.mail as mail FROM etudiant INNER JOIN adresse ON etudiant.adr_id = adresse.id WHERE etudiant.login='$login' AND etudiant.password='$password'";
    $req = $database->prepare($query);
    $req->execute();
    $ligne = $req->fetch();
    return $ligne;
}

function logIn($id, $nom, $prenom, $mail)
{
    $_SESSION['idStudent'] = $id;
    $_SESSION['nom'] = $nom;
    $_SESSION['prenom'] = $prenom;
    $_SESSION['mail'] = $mail;
}

function updateStudentInfos($maidenName, $dateOfBirth, $placeOfBirth)
{
    global $database;
    $id = $_SESSION['idStudent'];
    $query = "UPDATE etudiant SET nom_jeune_fille='$maidenName',ddn='$dateOfBirth',lieu_ddn='$placeOfBirth' WHERE id ='$id'";
    $res = $database->query($query);
    $count = $res->execute();
    return $count;
}

function getIdAdressByStudent()
{
    global $database;
    $id = $_SESSION['idStudent'];
    $query = "SELECT adr_id FROM etudiant WHERE id='$id'";
    $res = $database->query($query);
    $count = $res->fetch();
    return $count;
}

function updateAddressStudentInfos($lblAddress, $lblCity, $lblCodePostal, $tel, $phone)
{
    global $database;
    $id = $_SESSION['idStudent'];
    $res = getIdAdressByStudent($id);
    $idAdress = $res['adr_id'];
    $query = "UPDATE adresse SET libelle_adresse='$lblAddress', ville='$lblCity',codepostal='$lblCodePostal',tel='$tel',portable='$phone' WHERE adresse.id = $idAdress";
    $res = $database->query($query);
    $count = $res->execute();
    return $count;
}







