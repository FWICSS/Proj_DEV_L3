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

function getIdAdressByParent($parentMail)
{
    global $database;
    $query = "SELECT id FROM adresse WHERE mail ='$parentMail'";
    $stmt = $database->query($query);
    $count = $stmt->fetch();
    return $count;
}

function linkParentWithAddress($parentMail)
{
    global $database;
    $idAddress = getIdAdressByParent($parentMail);
    $query = "INSERT INTO parent(ADR_ID) VALUES (:idAddress)";
    $stmt = $database->prepare($query);
    $stmt->bindParam(':idAddress', $idAddress['id']);
    $count = $stmt->execute();
    return $count;
}
