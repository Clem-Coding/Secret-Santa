<?php


try {

    $bdd = new PDO('mysql:host=localhost;dbname=pere-noel-secret;charset=utf8;', 'root', '');
    echo 'Connexion réussie !';
} catch (PDOException $e) {
    die('Erreur de connexion à la base de données : ' . $e->getMessage());
}
