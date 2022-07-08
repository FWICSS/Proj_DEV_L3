<?php
require_once('Model.php');

function insertAdressParentInfos($lblParentAddress, $lblParentCity, $lblParentCodePostal, $parentMail, $parentTel)
{
    global $database;
    $query = "INSERT INTO adresse(libelle_adresse,ville,codepostal,mail,tel) VALUES (:lblParentAddress,:lblParentCity,:lblParentCodePostal,:parentMail,:parentTel)";
    $stmt = $database->prepare($query);
    $stmt->bindParam(':lblParentAddress', $lblParentAddress);
    $stmt->bindParam(':lblParentCity', $lblParentCity);
    $stmt->bindParam(':lblParentCodePostal', $lblParentCodePostal);
    $stmt->bindParam(':parentMail', $parentMail);
    $stmt->bindParam(':parentTel', $parentTel);
    $count = $stmt->execute();
    return $count;
}

function getIdAddress($parentMail)
{
    global $database;
    $query = "SELECT id FROM adresse WHERE mail = '$parentMail' ";
    $res = $database->query($query);
    $count = $res->fetch();
    return $count;
}

function linkAddressWithParent($parentMail)
{
    global $database;
    $idAdr = getIdAddress($parentMail);
    $id = $idAdr['id'];
    $query = "INSERT INTO parent (adr_id) VALUE ($id) ";
    $stmt = $database->prepare($query);
    $count = $stmt->execute();
    return $count;
}

function getIdParentByMail($parentMail)
{
    global $database;
    $query = "SELECT parent.id as idP FROM parent INNER JOIN adresse ON parent.adr_id = adresse.id WHERE MAIL = '$parentMail'";
    $res = $database->query($query);
    $count = $res->fetch();
    return $count;
}

function linkStudentWithParent($parentMail)
{
    global $database;
    $idParent = getIdParentByMail($parentMail);
    $idP = $idParent['idP'];
    $query = "UPDATE etudiant SET parent_id = $idP WHERE id = :id";
    $stmt = $database->prepare($query);
    $stmt->bindParam(':id', $_SESSION['idStudent']);
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
