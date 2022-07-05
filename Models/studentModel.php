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

function insertBacDiplome($idStudent,$serie, $mention, $year, $place)
{
    global $database;
    $query = "INSERT INTO diplome(id_etudiant,serie,mention,annee,lieu) VALUES (:id_etudiant,:serie,:mention,:annee,:place)";
    $stmt = $database->prepare($query);
    $stmt->bindParam(':id_etudiant', $idStudent);
    $stmt->bindParam(':serie', $serie);
    $stmt->bindParam(':mention', $mention);
    $stmt->bindParam(':annee', $year);
    $stmt->bindParam(':place', $place);
    $count = $stmt->execute();
    return $count;
}

function linkStudentWithDiplome($id)
{

}


function insertCycle($idStudent,$intitule,$annee_obtention,$place,$average){
    global $database;
    $query = "INSERT INTO diplome(id_etudiant,intitule,annee,lieu,moyenne) VALUES (:id_etudiant,:intitule,:annee,:place,:average)";
    $stmt = $database->prepare($query);
    $stmt->bindParam(':id_etudiant', $idStudent);
    $stmt->bindParam(':intitule', $intitule);
    $stmt->bindParam(':annee', $annee_obtention);
    $stmt->bindParam(':place', $place);
    $stmt->bindParam(':average', $average);
    $count = $stmt->execute();
    return $count;
}
function SelectParent()
{
    global $database;
    $id = $_SESSION['idStudent'];
    $query = "SELECT * FROM adresse INNER JOIN parent ON adresse.ID=parent.ADR_ID INNER JOIN avoir ON parent.ID = avoir.PARENT_ID WHERE avoir.ETUDIANT_ID ='$id'";
    $res = $database->query($query);
    $count = $res->fetch();
    return $count;
}

function SelectEtudiant()
{
    global $database;
    $id = $_SESSION['idStudent'];
    $query = "SELECT * FROM adresse INNER JOIN etudiant ON adresse.ID = etudiant.ADR_ID WHERE etudiant.id = '$id'";
    $res = $database->query($query);
    $count = $res->fetch();
    return $count;
}







