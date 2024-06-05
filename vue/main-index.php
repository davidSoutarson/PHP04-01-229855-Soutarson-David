<main>

    <h1>Génération de contenus et statistiques</h1>

    <form class="formulere" action="" method="post">

        <p>
            <label for="">Cliquer sur le bouton Génération pour générer du contenue aléatoire</label>
        </p>

        <button>Génération !</button>

    </form>

    <article class="article">

        <div class="contunuT">
            <h2>
                Afiche le contenue de la génération !
            </h2>
        </div>
        <div class="contenue-generer">

            <!-- insertion de fichier php -->
            <?php
            require 'php\object-ecole.php';

            //execute 3x les instance de class
            #la varile $i et incremeter $i vaeu 0, 1, puis 2
            for ($i = 0; $i < 3; $i++) {
                # code...
                echo "<div class='afichage'>";
                echo "<P> Ecole genérer </p>";

                echo  " comte nue pour : ";

                // afiche le nom des ecole en parourant la contente tableau NOM 
                # avec la varile $i incrémeter 
                $ecole[$i] = new Ecole();
                echo Ecole::NOM[$i] . "<br>";

                // afiche le les tous sport des ecole en parourant la contente tableau CINQ_SPORT 
                # avec la varile $i incrémeter sur 4 tour soi $n= 0, 1, 2, puis 3
                echo "<p> Liste de tout les sport proposer : </p> <p>";
                for ($n = 0; $n < 4; $n++) {
                    echo Ecole::CINQ_SPORT[$n] . ",  ";
                };
                //afiche 5 eme sport 
                echo Ecole::CINQ_SPORT[4] . ". </p>";


                # apele la fonction sur nombre_eleve
                $ecole[$i]->all_n_eleve();
                echo $ecole[$i]->nombre_eleve . " nombre d' eleve <br>";

                # apele la fonction sur nombre_sportifs
                $ecole[$i]->all_n_sportifs();
                echo $ecole[$i]->nombre_sportifs . " nombre de sportife <br>";

                # apele la fonction melange_sport_pratiques() 
                #fait varier lordre du tableau  $nombre_sport_pratiques [1,2,3,4,5] ex ou [3,4,5,2,1]
                $ecole[$i]->melange_sport_pratiques();
                $convertion_n_sport_pratiques = $ecole[$i]->nombre_sport_pratiques[0];
                # afichie la premier case du tableau nombre_sport_pratiques
                $_nombre_sport_pratiques = $ecole[$i]->nombre_sport_pratiques = $convertion_n_sport_pratiques;

                echo  "<p>" . $_nombre_sport_pratiques . "  nombre de sport praticquer </p>";



                # $test stock string chaine de carater pratiquer
                echo "<p>" . $ecole[$i]->afiche_sport_pratiquer() . "</p>";


                #$n_port_pratiques  recuper le recuper le nombre_sport_pratiques
                //$n_port_pratiques = $ecole[$i]->pour_sport_patiquer();

                switch ($_nombre_sport_pratiques) {
                    case '1':
                        #code.OK 
                        //pratiquant_juste_1_sports
                        $ecole[$i]->pratiquant_juste_1_sports();
                        echo $ecole[$i]->eleves_pratiquant_juste_1_sports . " éleve pratiquan juste un sport <br>";

                        break;
                    case '2':
                        #code..ok
                        //pratiquant_1_sports
                        $ecole[$i]->pratiquant_1_sports();
                        echo $ecole[$i]->eleves_pratiquant_1_sports . " éleve pratiquan un sport <br>";

                        //pratiquant_2_sports
                        $ecole[$i]->pratiquant_max2_sports();
                        echo $ecole[$i]->eleves_pratiquant_max2_sports . " éleve pratiquan max deux sport <br>";

                        break;
                    default:
                        # code...ok
                        //pratiquant_1_sports
                        $ecole[$i]->pratiquant_1_sports();
                        echo $ecole[$i]->eleves_pratiquant_1_sports . " éleve pratiquan un sport <br>";


                        //pratiquant_2_sports
                        $ecole[$i]->pratiquant_2_sports();
                        echo $ecole[$i]->eleves_pratiquant_2_sports . " éleve pratiquan deux sport <br>";


                        //pratiquant_3_sports
                        $ecole[$i]->pratiquant_3_sports();
                        echo $ecole[$i]->eleves_pratiquant_3_sports . " éleve pratiquan trois sport <br>";
                        break;
                }


                echo "<br>";

                $ecole[$i]->atibu_n_s();


                echo  "<p> ----------------  </p>";

                echo "</div>";
            }
            ?>

        </div>

    </article>

</main>