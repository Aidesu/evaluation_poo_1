<?php 

class Ville {

    private string $name;
    private string $departement;

    public function __construct($name, $departement){
        $this->name = $name;
        $this->departement = $departement;

    }
    
    public function label() {
        echo "La ville ". $this->name . " est dans le departement ". $this->departement. "\n";
    }
}