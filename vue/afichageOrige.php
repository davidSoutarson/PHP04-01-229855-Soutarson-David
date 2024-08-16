<?php

require 'php\generer-ecole.php';

for ($i = 0; $i < 3; $i++) {

    echo "<div class='afichage'>";
    echo "<P> Ecole genérer </p>";


    // afiche le nom des ecole en parourant la contente tableau NOM 
    # avec la varile $i incrémeter 
    $ecole[$i] = new Ecole();
    $non_des_ecole = Ecole::NOM[$i];

    echo  "<p>" . $non_des_ecole . "</p>";

    // afiche le tous les sport des ecole en parourant la contente tableau CINQ_SPORT 
    # avec la varile $i incrémeter sur 4 tour soi $n= 0, 1, 2, puis 3
    echo "<p> Liste de tout les sport proposer : </p> <p>";
    for ($n = 0; $n < 5; $n++) {
        if ($n < 4) {
            //afiche 0,1,2,3,4 sport
            $sport_des_ecole = Ecole::CINQ_SPORT[$n] . ", ";
        } else {
            //afiche 5 eme sport 
            $sport_des_ecole = Ecole::CINQ_SPORT[$n] . ".";
        }

        echo $sport_des_ecole;
    };
    echo "</p>";


    # apele la fonction sur nombre_eleve
    $ecole[$i]->all_n_eleve();
    $totale_nombre_eleve = $ecole[$i]->nombre_eleve;
    echo "<p> Totale : " . $totale_nombre_eleve . " nombre d'eleve. </p>";

    # apele la fonction sur nombre_sportifs
    $ecole[$i]->all_n_sportifs();
    $totale_nombre_de_Sportif = $ecole[$i]->nombre_sportifs;
    echo "<p> Totale : " . $totale_nombre_de_Sportif . " nombre de sportife </p>";

    if ($totale_nombre_de_Sportif === 0) {
        echo "<p> Les éleve de cette ecole ne fon pas sport </p>";
    } else {
        # apele la fonction melange_sport_pratiques() 
        #fait varier lordre du tableau  $nombre_sport_pratiques [1,2,3,4,5] ex ou [3,4,5,2,1]
        $ecole[$i]->melange_sport_pratiques();

        $convertion_n_sport_pratiques = $ecole[$i]->nombre_sport_pratiques[0];
        # afichie la premier case du tableau nombre_sport_pratiques
        $nombre_sport_pratiques = $ecole[$i]->nombre_sport_pratiques = $convertion_n_sport_pratiques;
        echo  "<p> Totale : " . $nombre_sport_pratiques . "  nombre de sport praticquer </p>";

        # stock string chaine de carater pratiquer
        $nom_sport_pratiuquer = $ecole[$i]->afiche_sport_pratiquer();
        echo "<p>Liste des sport pratiuquer : " . $nom_sport_pratiuquer  . " par " . $non_des_ecole . "</p>";


        echo "<p> Sur " . $totale_nombre_de_Sportif . " eleve sportife : ";

        //en fontion du $nombre_sport_pratiques 
        // apelle la fontion corepondeante .
        switch ($nombre_sport_pratiques) {
            case '1':
                #code.OK 
                //pratiquant_juste_1_sports
                $ecole[$i]->pratiquant_juste_1_sports();
                break;
            case '2':
                #code..ok
                //pratiquant_1_sports
                $ecole[$i]->pratiquant_1_sports();
                //pratiquant_2_sports
                $ecole[$i]->pratiquant_max2_sports();
                break;
            default:
                # code...ok
                //pratiquant_1_sports
                $ecole[$i]->pratiquant_1_sports();
                //pratiquant_2_sports
                $ecole[$i]->pratiquant_2_sports();
                //pratiquant_3_sports
                $ecole[$i]->pratiquant_3_sports();
                break;
        }

        echo "</p>";

        echo "<br>";

        $ecole[$i]->nonbre_pratiquan_par_sport();
    }

    echo  "<p> ----------------  </p>";

    echo var_dump($ecole[$i]);

    echo "</div>";
}
