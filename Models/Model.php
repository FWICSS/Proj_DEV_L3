<?php
define('DB_NAME', 'miage_projet');
define('DB_SERVER', 'localhost');
define('DB_USER', 'root');
define('DB_PASSWORD', 'root');


function connect()
{
    try {
        $connexion = new PDO("mysql:host=" . DB_SERVER . ";dbname=" . DB_NAME, DB_USER, DB_PASSWORD);
        $connexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        return $connexion;

    } catch (PDOException $e) {

        echo "Oups ! Connexion SGBD impossible ! " . $e->getMessage();

    }
}

$database = connect();

/*
    MEMO base en ligne
    user : u790235881_dimitri
    nom base : u790235881_miage_projet
    mdp : Miage@971.
    Server : sql655.main-hosting.eu
    https://auth-db655.hostinger.fr/?_ga=2.123164813.729824639.1655921070-1260001690.1655921070
    212.1.211.1
*/