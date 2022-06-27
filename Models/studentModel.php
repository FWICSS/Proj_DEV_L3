<?php
require_once('Model.php');
function createNewStudent($nom, $prenom, $login, $password)
{
    global $database;
    $query = "INSERT INTO etudiant(nom, prenom, login, password) VALUES ('$nom','$prenom','$login','$password')";
    $stmt = $database->prepare($query);
    $count = $stmt->execute();
    return $count;
}
