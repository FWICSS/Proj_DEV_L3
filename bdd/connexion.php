<?php
define('DB_NAME', 'u790235881_miage_projet');
define('DB_SERVER', 'sql655.main-hosting.eu');
define('DB_USER', 'u790235881_dimitri');
define('DB_PASSWORD', 'Miage@971.');

function connect()
{
    try {
        
        $conn = new PDO("mysql:host=" . DB_SERVER . ";dbname=".DB_NAME, DB_USER, DB_PASSWORD);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        echo 'Connexion réussie';

    } catch (PDOException $e) {
        
        echo "Oups ! Connexion SGBD impossible ! " . $e->getMessage();

    }
}

$connexion = connect();

/*
    MEMO base en ligne
    user : u790235881_dimitri
    nom base : u790235881_miage_projet
    mdp : Miage@971.
    Server : sql655.main-hosting.eu
*/
