<?php

/*$hostname = "127.0.0.1"; // Adresse du serveur MySQL
$username = "root"; // Nom d'utilisateur MySQL
$password = "Derrickrose+1995"; // Mot de passe MySQL
$dbname = "db_ong_erfi"; // Nom de la base de données*/
$hostname = "91.216.107.187";
$username = "onger1821292"; // Nom d'utilisateur MySQL
$password = "tzqcxlvtlg"; // Mot de passe MySQL
$dbname = "onger1821292"; // Nom de la base de données
// Connexion à la base de données
$conn = new mysqli($hostname, $username, $password, $dbname);

// Vérifier la connexion
if ($conn->connect_error) {
    die("Erreur de connexion à la base de données : " . $conn->connect_error);
}

?>