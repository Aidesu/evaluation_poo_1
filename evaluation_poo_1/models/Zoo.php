<?php 

include_once (__DIR__."/Visitors.php");
include_once (__DIR__."/Animals.php");

class Zoo {

    private static int $day = 3;
    private static $visitors = [];
    private static $animals = [];

    

    public static function getDay() {
        return self::$day;
    }

    public static function incDay() {
        self::$day += 1;
    }

    public static function setVisitors($visitor) {
        self::$visitors[] = $visitor;
    }

    public static function setAnimals($animal){
        self::$animals[] = $animal;
    }


    public static function vendreBillets($name, $pplNmb, $valide = true) {
        if ($pplNmb === 1){
            ${"visitor_" . $name} = new Visitors($name, $valide, $pplNmb);
            echo "\e[0;36m1 ticket a ete vendu pour " . $name . "\e[0m\n";
        } elseif ($pplNmb > 1) {
            ${"visitor_" . $name} = new Visitors("Groupe de ". $name . " constituer de " . $pplNmb . " personnes ", $valide, $pplNmb);
            echo "\e[1;36m1 ticket de groupe a ete vendu a " . $name . " pour " . $pplNmb ." personnes\e[0m\n";
        } else {
            echo "Erreur un nombre minimum de personne dois etre preciser";
        }
    }

    public static function livraison($nmb) {
        echo "\e[1;32mUne livraison de " . $nmb . " animaux a ete effectuee.\e[0m\n";
        while($nmb !== 0){
        $name = Animals::$names[rand (0, count(Animals::$names) -1)];
        $espece = "Serpent";
        $regime = "Carnivor";
        ${"animal_" . $name . "_" . self::getDay()} = new Animals($espece, $regime, $name);
        $nmb -= 1;
        }
    }

    public static function naissance() {
        $iter = self::$day;
        echo "\e[1;32mUn nouvel animal est ne dans le zoo\e[0m\n";
        self::$animals[$iter]->donnerNaissance();
        $iter += 1;
    }

    public static function ouvrirLesPorte() {
        if (count(self::$visitors) >= 2) {
            echo "\e[1;35m############################ LE ZOO OUVRE SES PORTES !!! ############################\e[0m\n";
            echo "\e[1;34mDay : " . self::getDay() . "\e[0m\n\n";
            $visitNmb = 0;
            foreach(self::$visitors as $visit){
                if ($visit->getTicket() === true){
                $visit->observer();
                foreach(self::$animals as $elem){
                    $elem->faireLeShow();
                    sleep(0.5);
                }
                echo "\n";
                $visitNmb += 1;
                if ($visitNmb == floor(count(self::$visitors)) / 2){
                    self::naissance();
                }
            } else {
                $visit->refused();
            }
        }
        self::naissance();
        } else {
            echo "############ LE ZOO N'OUVRE PAS SES PORTES PAR MANQUE DE VISITEURS ############ \n \n";
        }
    }
}


?>