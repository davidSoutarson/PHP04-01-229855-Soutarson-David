<?php

// Définition des constantes pour la connexion à la base de données
define('DB_USERNAME', 'root');
define('DB_PASSWORD', '');
define('DB_SERVER', 'localhost');
define('DB_NAME', 'ecole_hal_gene');

// Déclaration des messages (à utiliser éventuellement pour afficher des informations)
$messages = [];

try {
    // Connexion à MySQL en utilisant PDO
    $connexion = new PDO("mysql:host=" . DB_SERVER . ";dbname=" . DB_NAME, DB_USERNAME, DB_PASSWORD);
    $connexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // Création de la base de données si elle n'existe pas
    $sqlCreateDB = "CREATE DATABASE IF NOT EXISTS " . DB_NAME;
    $connexion->exec($sqlCreateDB);
    $messages[] = 'Base de données créée ou existante.<br>';

    // Sélection de la base de données
    $connexion->exec("USE " . DB_NAME);

    // Création des tables si elles n'existent pas
    $sqlCreateTable1 = "CREATE TABLE IF NOT EXISTS Ecoles (
        id INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
        nom_des_ecole VARCHAR(100)
    )";
    $connexion->exec($sqlCreateTable1);
    $messages[] = 'Table "Ecoles" créée ou existante.<br>';

    $sqlCreateTable2 = "CREATE TABLE IF NOT EXISTS Eleves (
        id INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
        nombre_eleve INT,
        nombre_sportifs INT
    )";
    $connexion->exec($sqlCreateTable2);
    $messages[] = 'Table "Eleves" créée ou existante.<br>';

    $sqlCreateTable3 = "CREATE TABLE IF NOT EXISTS Sports (
        id INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
        sport_des_ecole VARCHAR(100),
        nombre_sport_pratiques INT,
        liste_sport_pratiquees VARCHAR(255)
    )";
    $connexion->exec($sqlCreateTable3);
    $messages[] = 'Table "Sports" créée ou existante.<br>';

    $sqlCreateTable4 = "CREATE TABLE IF NOT EXISTS Sportifs (
        id INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
        eleves_pratiquant_juste_1_sports INT,
        eleves_pratiquant_1_sports INT,
        eleves_pratiquant_max2_sports INT,
        eleves_pratiquant_2_sports INT,
        eleves_pratiquant_3_sports INT
    )";
    $connexion->exec($sqlCreateTable4);
    $messages[] = 'Table "Sportifs" créée ou existante.<br>';
} catch (PDOException $exception) {
    // En cas d'erreur de connexion ou d'exécution SQL
    $messages[] = 'Échec de la connexion : ' . $exception->getMessage();
}

// Retourner les messages pour affichage éventuel
return [
    'messages' => $messages,
    'connexion' => $connexion // Vous pouvez retourner la connexion PDO si nécessaire
];
