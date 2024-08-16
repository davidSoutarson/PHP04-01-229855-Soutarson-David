<?php

require 'php/generer-ecole.php';

// Boucle pour générer et afficher les informations sur chaque école
for ($i = 0; $i < 3; $i++) {

    echo "<div class='affichage'>";
    echo "<p>École générée</p>";

    // Création d'une nouvelle instance d'école
    $ecole = new Ecole();
    // Affichage du nom de l'école à partir du tableau statique NOM dans la classe Ecole
    $nom_des_ecole = Ecole::NOM[$i];
    echo "<p>Nom de l'école : $nom_des_ecole</p>";

    // Affichage de tous les sports proposés par l'école à partir du tableau statique CINQ_SPORT dans la classe Ecole
    echo "<p>Liste de tous les sports proposés :</p><p>";
    foreach (Ecole::CINQ_SPORT as $index => $sport) {
        echo ($index < 4) ? "$sport, " : "$sport.";
    }
    echo "</p>";

    // Appel des méthodes pour récupérer le nombre d'élèves et de sportifs
    $ecole->all_n_eleve();
    $totale_nombre_eleve = $ecole->nombre_eleve;
    echo "<p>Total : $totale_nombre_eleve nombre d'élève(s).</p>";

    $ecole->all_n_sportifs();
    $totale_nombre_de_Sportif = $ecole->nombre_sportifs;
    echo "<p>Total : $totale_nombre_de_Sportif nombre de sportif(s).</p>";

    if ($totale_nombre_de_Sportif === 0) {
        echo "<p>Les élèves de cette école ne font pas de sport.</p>";
    } else {
        // Mélange aléatoire des sports pratiqués par les sportifs de l'école
        $ecole->melange_sport_pratiques();
        $nombre_sport_pratiques = $ecole->nombre_sport_pratiques[0];
        echo "<p>Total : $nombre_sport_pratiques nombre de sport(s) pratiqué(s).</p>";

        // Affichage de la liste des sports pratiqués
        $nom_sport_pratiuquer = $ecole->afiche_sport_pratiquer();
        echo "<p>Liste des sports pratiqués : $nom_sport_pratiuquer par $nom_des_ecole.</p>";

        // Affichage des élèves en fonction du nombre de sports pratiqués
        echo "<p>Sur $totale_nombre_de_Sportif élève(s) sportif(s) :</p>";
        switch ($nombre_sport_pratiques) {
            case 1:
                $ecole->pratiquant_juste_1_sports();
                break;
            case 2:
                $ecole->pratiquant_1_sports();
                $ecole->pratiquant_max2_sports();
                break;
            default:
                $ecole->pratiquant_1_sports();
                $ecole->pratiquant_2_sports();
                $ecole->pratiquant_3_sports();
                break;
        }

        // Affichage du nombre de pratiquants par sport
        $ecole->nonbre_pratiquan_par_sport();
    }

    echo "<p>-------- ok -----------</p>";

    // Affichage de la structure de l'objet Ecole pour débogage
    echo "<pre>";
    var_dump($ecole);
    echo "</pre>";

    echo "</div>";
}
