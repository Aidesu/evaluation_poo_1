<?php

include_once (__DIR__."/Zoo.php");

class Visitors {

    private string $name;
    private bool $ticket;
    private int $pplNmb;

    public function __construct($name, $ticket, $pplNmb) {
        $this->name = $name;
        $this->ticket = $ticket;
        $this->pplNmb = $pplNmb;

        Zoo::setVisitors($this);

    }

    public function getName() {
        return $this->name;
    }

    public function getTicket() {
        return $this->ticket;
    }

    public function getPplNmb() {
        return $this->pplNmb;
    }

    public function observer() {
        echo "\e[1;35m" . $this->name . " \e[0m\e[0;35mentre dans le ZOO et observe : \e[0m\n";
    }

    public function refused() {
        echo "\e[1;31m" . $this->name . " a ete refuser a l'entrer du Zoo pour cause de ticket non valide\e[0m\n\n";
    }


}