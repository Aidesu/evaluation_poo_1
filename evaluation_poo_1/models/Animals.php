<?php

include_once (__DIR__."/Zoo.php");

class Animals {

    private $name;
    private string $espece;
    private string $regime;

    public function __construct($espece, $regime,?string $name = null) {
        $this->name = $name;
        $this->espece = $espece;
        $this->regime = $regime;

        Zoo::setAnimals($this);
    }

    public function getName() {
        return $this->name;
    }

    // public function setEspece($name) {
    //     $this->name = $name;
    // }

    public function getEspece() {
        return $this->espece;
    }

    // public function setEspece($espece) {
    //     $this->espece = $espece;
    // }

    public function getRegime() {
        return $this->regime;
    }

    // public function setRegime($regime) {
    //     $this->regime = $regime;
    // }

    public static function getAnimals() {
        print_r(self::$animals);
    }

    public function faireLeShow() {
        if ($this->name === null){
            echo "\e[0;33mcet animal ". $this->getRegime() . " qui est un " . $this->getEspece(). " prend la pose \e[0m\n";
        }else {
            echo "\e[0;33mcet animal ". $this->getRegime() . " qui est un " . $this->getEspece() . " et qui s'appelle \e[0m\e[1;32m" . $this->getName() . "\e[0m\e[0;33m prend la pose  \e[0m\n";
        }
    }

    public function donnerNaissance() {
        
        if ($this->name === null){
            echo "\e[1;36m" . $this->espece ." viens de donner naissance a un bebe " . $this->espece . "\e[0m\n\n";
        }else {
            echo "\e[1;36m" .$this->name ." viens de donner naissance a un bebe " . $this->espece . "\e[0m\n\n";
        }
    }

    public static $names = array(
        'Johnathon',
        'Anthony',
        'Erasmo',
        'Raleigh',
        'Nancie',
        'Tama',
        'Camellia',
        'Augustine',
        'Christeen',
        'Luz',
        'Diego',
        'Lyndia',
        'Thomas',
        'Georgianna',
        'Leigha',
        'Alejandro',
        'Marquis',
        'Joan',
        'Stephania',
        'Elroy',
        'Zonia',
        'Buffy',
        'Sharie',
        'Blythe',
        'Gaylene',
        'Elida',
        'Randy',
        'Margarete',
        'Margarett',
        'Dion',
        'Tomi',
        'Arden',
        'Clora',
        'Laine',
        'Becki',
        'Margherita',
        'Bong',
        'Jeanice',
        'Qiana',
        'Lawanda',
        'Rebecka',
        'Maribel',
        'Tami',
        'Yuri',
        'Michele',
        'Rubi',
        'Larisa',
        'Lloyd',
        'Tyisha',
        'Samatha'
);
 
}