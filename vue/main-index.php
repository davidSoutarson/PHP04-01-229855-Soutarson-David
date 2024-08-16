<main>

    <h1>Génération de contenus et statistiques</h1>

    <form class="formulere" action="" method="post">

        <p>
            <label for="">Cliquer sur le bouton Génération pour générer du contenue aléatoire</label>
        </p>

        <button name="generer"><em>Génération !</em> </button>

    </form>

    <article class="article">

        <article>
            <?php
            if (isset($mesage)) {
                foreach ($mesage as $key => $value) {
                    echo $key . " " . $value;
                }
            }

            if (isset($connexion)) {
                foreach ($connexion as $key => $value) {
                    echo $key . " " . $value;
                }
            }
            ?>
        </article>

        <div class="contenue-generer">

            <!-- insertion de fichier php -->
            <?php

            if (isset($_POST["generer"])) {

                // require 'php\generer-ecole.php';

                //execute 3x les instance de class
                #la varile $i et incremeter $i vaeu 0, 1, puis 2

                require 'afichage.php';
            } else {

                echo "<div>";

                echo "<h2> Cliquer sur le bouton Génération !</h2>";

                echo "</div>";
            }


            ?>

        </div>

    </article>


</main>