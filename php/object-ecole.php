<?php

/*
* class ecole
* Permet de generer les ecole A B C et leur contuene aleatoir 
*/

class Ecole
{
    // propri eter de ma classe Ecole

    # NON array  string le non de tout les ecoles
    public const NOM = array(
        'ecole A',
        'ecole B',
        'ecole C',
    );

    # CINQ_SPORT array  string tout les sport proposer
    public const CINQ_SPORT = array(
        'boxe',
        'judo',
        'football',
        'natation',
        'cyclime',
    );

    public $nombre_eleve;

    public function all_n_eleve()
    {
        $this->nombre_eleve = rand(30, 600);
    }

    public $nombre_sportifs;

    public function all_n_sportifs()
    {
        $n_max = $this->nombre_eleve;

        $this->nombre_sportifs = rand(0, $n_max);
    }

    public $nombre_sport_pratiques = [1, 2, 3, 4, 5];

    # melange le tableau $nombre_sport_pratiques 
    public function melange_sport_pratiques()
    {
        shuffle($this->nombre_sport_pratiques);

        $this->nombre_sport_pratiques;
    }


    //public $Nombre_sport_pratiques;



    # lordre des sport et modifier par la fontion  afiche_sport_pratiquer() 
    # melange les tableau CINQ_SPORT et 
    # retourne le ou les sport pratiquer 
    # en fontion du nombre de sport pratiquer
    public $liste_sport_pratiquees = Ecole::CINQ_SPORT;
    public function afiche_sport_pratiquer()
    {
        # recuper le nombre_sport_pratiques
        $dansLeCas = $this->nombre_sport_pratiques;

        # melange les tableau CINQ_SPORT
        # presition a fin que les sport sois diferant
        shuffle($this->liste_sport_pratiquees);
        $mel_sport = $this->liste_sport_pratiquees;

        switch ($dansLeCas) {
            case '1':
                # code...
                $aficher = $mel_sport[0];
                break;

            case '2':
                # code...
                $aficher = $mel_sport[0] . " " . $mel_sport[1];
                break;

            case '3':
                # code...
                $aficher = $mel_sport[0] . " " . $mel_sport[1] . " " . $mel_sport[2];
                break;

            case '4':
                # code...
                $aficher = $mel_sport[0] . " " . $mel_sport[1] . " " . $mel_sport[2] . " " . $mel_sport[3];
                break;

            case '5':
                $aficher = $mel_sport[0] . " " . $mel_sport[1] . " " . $mel_sport[2] . " " . $mel_sport[3] . " " . $mel_sport[4];
                break;

            default:
                # code...
                $aficher = "Ne compran pas !!!";
                break;
        }

        return $aficher;
    }



    #F 1
    public $eleves_pratiquant_juste_1_sports;
    public function pratiquant_juste_1_sports()
    {
        $p_max = $this->nombre_sportifs;
        $this->eleves_pratiquant_juste_1_sports = $p_max;
    }

    #F 2
    public $eleves_pratiquant_1_sports;
    public function pratiquant_1_sports()
    {
        $p_max = $this->nombre_sportifs;
        $this->eleves_pratiquant_1_sports = rand(0, $p_max);
    }

    #F 3
    public $eleves_pratiquant_2_sports;
    public function pratiquant_2_sports()
    {
        $p2_max = $this->nombre_sportifs - $this->eleves_pratiquant_1_sports;
        $this->eleves_pratiquant_2_sports = rand(0, $p2_max);
    }

    #F 4
    public $eleves_pratiquant_max2_sports;
    public function pratiquant_max2_sports()
    {
        $pm2_max = $this->nombre_sportifs - $this->eleves_pratiquant_1_sports;
        $this->eleves_pratiquant_max2_sports =  $pm2_max;
    }

    #F 5
    public $eleves_pratiquant_3_sports;
    public function pratiquant_3_sports()
    {
        $p3_max = $this->nombre_sportifs - ($this->eleves_pratiquant_2_sports + $this->eleves_pratiquant_1_sports);
        $this->eleves_pratiquant_3_sports = $p3_max;
    }


    public function atibu_n_s()
    {
        $liste_sport_pratiquees = $this->liste_sport_pratiquees;
        $nombre_sportifs = $this->nombre_sportifs;
        $nombre_sport_pratiques = $this->nombre_sport_pratiques;


        if ($nombre_sport_pratiques == 1) {

            echo $liste_sport_pratiquees[0] . ":  : " . $nombre_sportifs;
        }
        if ($nombre_sport_pratiques == 2) {
            $unPs = rand(0, $nombre_sportifs);
            $deuxPs = $nombre_sportifs - $unPs;

            echo $liste_sport_pratiquees[0] . ":" . $unPs . "<br>" .
                $liste_sport_pratiquees[1] . ":" . $deuxPs;
        }

        if ($nombre_sport_pratiques == 3) {

            $un = $this->eleves_pratiquant_1_sports;
            $part_un = rand(0, $un);
            $rest_un = $un - $part_un;

            $deux = $this->eleves_pratiquant_2_sports;
            $part_deux = rand(0, $deux);
            $rest_deux = $deux - $part_deux;

            $trois = $this->eleves_pratiquant_3_sports;
            $part_trois = $trois + ($rest_un + $rest_deux);

            echo $liste_sport_pratiquees[0] . ":" . $part_un . "<br>" .
                $liste_sport_pratiquees[1] . ":" . $part_deux . "<br>" .
                $liste_sport_pratiquees[2] . ":" . $part_trois . " <br>";
        }

        if ($nombre_sport_pratiques == 4) {

            $un = $this->eleves_pratiquant_1_sports;
            $part_un = rand(0, $un);
            $rest_un = $un - $part_un;

            $deux = $this->eleves_pratiquant_2_sports;
            $part_deux = rand(0, $deux);
            $rest_deux = $deux - $part_deux;

            $trois = $this->eleves_pratiquant_3_sports;
            $part_trois = rand(0, $trois);
            $rest_trois = $trois - $part_trois;

            $part_quatre = $rest_un + $rest_deux + $rest_trois;

            echo $liste_sport_pratiquees[0] . ":" . $part_un . "<br>" .
                $liste_sport_pratiquees[1] . ":" . $part_deux . "<br>" .
                $liste_sport_pratiquees[2] . ":" . $part_trois . " <br>" .
                $liste_sport_pratiquees[3] . ":" . $part_quatre . " <br>";
        }

        if ($nombre_sport_pratiques == 5) {

            $un = $this->eleves_pratiquant_1_sports;
            $part_un = rand(0, $un);
            $rest_un = $un - $part_un;

            $deux = $this->eleves_pratiquant_2_sports;
            $part_deux = rand(0, $deux);
            $rest_deux = $deux - $part_deux;

            $trois = $this->eleves_pratiquant_3_sports;
            $part_trois = rand(0, $trois);
            $rest_trois = $trois - $part_trois;

            $quatre = $rest_un + $rest_deux + $rest_trois;
            $part_quatre = rand(0, $quatre);
            $rest_quatre = $quatre - $part_quatre;

            $part_cinq = $rest_quatre;

            echo $liste_sport_pratiquees[0] . ":" . $part_un . "<br>" .
                $liste_sport_pratiquees[1] . ":" . $part_deux . "<br>" .
                $liste_sport_pratiquees[2] . ":" . $part_trois . " <br>" .
                $liste_sport_pratiquees[3] . ":" . $part_quatre . " <br>" .
                $liste_sport_pratiquees[4] . ":" . $part_cinq . " <br>";
        }
    }
}
