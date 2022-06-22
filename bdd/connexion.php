<?php
define('DB_NAME', 'miage_projet');
define('DB_SERVER', 'localhost');
define('DB_USER', 'root');
define('DB_PASSWORD', '');

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
