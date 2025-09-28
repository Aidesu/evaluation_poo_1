<?php

abstract class AbsPersonne {

    private string $firstName;
    private string $lastName;

    public function __construct($firstName, $lastName) {
        $this->firstName = $firstName;
        $this->lastName = $lastName;
    }

    protected function getFirstName(){
        return $this->firstName;
    }

    protected function getLastName() {
        return $this->lastName;
    }
}