<?php

define('DB_USERNAME', 'root');
define('DB_PASWORD', '');
define('DB_SERVEUR', 'localhost');
define('DB_NAME', 'ecole_hal_gene');

$bd_userName = 'root';
$bd_pasword = '';
$bd_serveur = 'localhost';
$bd_name = 'ecole_hal_gene';


//defined('MESAGE', $mesage);

// contue des table ecole
$nom_des_ecole = 'nom_des_ecole';

$nombre_eleve = 'nombre_eleve';
$nombre_sportifs = 'nombre_sportifs';



$nombre_sport_pratiques = 'nombre_sport_pratiques';
$liste_sport_pratiquees = 'liste_sport_pratiquees';

$eleves_pratiquant_juste_1_sports = 'eleves_pratiquant_juste_1_sports';
$eleves_pratiquant_1_sports = 'eleves_pratiquant_1_sports';
$eleves_pratiquant_max2_sports = 'eleves_pratiquant_max2_sports';
$eleves_pratiquant_3_sports = 'eleves_pratiquant_3_sports';


try {
    $connexion = new PDO("mysql:host = DB_SERVEUR", DB_USERNAME, DB_PASWORD);
    $connexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $connexion->exec("CREATE DATABASE IF NOT EXISTS $bd_name");
    $mesage[] = 'Base donnés créée <br>';
} catch (PDOException $exception) {
    $mesage[] = 'Echeque de la connexion:<br>' . $exception->getMessage();
}


try {
    $connexion = new PDO("mysql:host=$bd_serveur;dbname=ecole_hal_gene", DB_USERNAME, DB_PASWORD);
    $connexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $codesqul_table1 = "CREATE TABLE IF NOT EXISTS Ecoles(
    id INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    nom_des_ecole VARCHAR(20)
    )";

    $codesqul_table2 = "CREATE TABLE IF NOT EXISTS Eleves(
    id INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    nombre_eleve INT,
    nombre_sportifs INT
)";

    $codesqul_table3 = "CREATE TABLE IF NOT EXISTS Sports(
    id INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    sport_des_ecole VARCHAR(55),
    nombre_sport_pratiques INT,
    liste_sport_pratiquees VARCHAR(55)
    )";

    $codesqul_table4 = "CREATE TABLE IF NOT EXISTS Sportifs(
    id INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    eleves_pratiquant_juste_1_sports INT,
    eleves_pratiquant_1_sports INT,
    eleves_pratiquant_max2_sports INT,
    eleves_pratiquant_2_sports INT,
    eleves_pratiquant_3_sports INT
    )";

    $connexion->exec($codesqul_table1);
    $mesage[] = 'Table "Ecole" créée.<br>';
    $connexion->exec($codesqul_table2);
    $mesage[] = 'Table "Eleves" créée.<br>';
    $connexion->exec($codesqul_table3);
    $mesage[] = 'Table "Sports" créée.<br>';
    $connexion->exec($codesqul_table4);
    $mesage[] = 'Table "Sportifs" créée.<br>';

    /* $connexion->exec($codesqul_table1 . $codesqul_table2 . $codesqul_table3 . $codesqul_table4);
    $mesage = 'Table 1,2,3,4 son créée.'; */
} catch (PDOException $exception) {
    $mesage[] = 'Echéque de la connexion ?<br>' . $exception->getMessage();
}
