<?php

include_once (__DIR__."/Personne.php");

class Client extends AbsPersonne {
    
    private $address = [];

    public function setCoord($lat, $lng) {
        $this->address = ["lat" => $lat, "lng" => $lng];
    }

    public function getClient() {
        echo  "First name : " . $this->getFirstName() . "\nLast Name : " . $this->getLastName() . "\nCoordinates : " . implode(' ', $this->address) . "\n";
    }


}