<?php

include_once (__DIR__. "/Client.php");

class Electeur extends AbsPersonne {

    private string $bureau_de_vote;
    private string $vote;

    public function avoter($bureau_de_vote, $vote) {
        $this->bureau_de_vote = $bureau_de_vote;
        $this->vote = $vote;
    }
}