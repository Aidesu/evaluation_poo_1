<?php

class Personne {
    
    private string $nom;
    private string $prenom;
    private string $adresse;

    public function __construct($nom, $prenom, $adresse) {
        $this->nom = $nom;
        $this->prenom = $prenom;
        $this->adresse = $adresse;

    }

    function __destruct() {
    $this->getPersonne();
    }
    
    public function getPersonne() {
        echo "Nom : " . $this->nom . "\n";
        echo "Prenom : " . $this->prenom. "\n";
        echo "Adresse : " . $this->adresse. "\n\n";
    }

    public function setAdresse($adresse) {
        $before = $this->adresse;
        $this->adresse = $adresse;
        echo "L'adresse de " . $this->prenom . " a ete modifier pour " . $this->adresse . " anciennement " . $before. "\n";
    }
}