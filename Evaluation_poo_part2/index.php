<?php 

    include_once "./Exercice_1_2_3/models/Ville.php";
    include_once "./Exercice_1_2_3/models/Personne.php";
    include_once "./Exercice_7/Client.php";
    include_once "./Exercice_7/Electeur.php";
    include_once "./Exercice_8_9/Namespaces.php";

function exo1() {
    $montpellier = new Ville("Montpellier", "Herault");
    $montpellier->label();
}
//exo1();

function exo3() {
    
    echo "\n";
    $michel = new Personne("Gaius von valbazard", "Michel", "25 allee de l'enchanteur");
    $gerome = new Personne("Gaius von valtegazard", "Gerome", "36 allee des 99 fee du lac");
    echo "\n";
    $michel->getPersonne();
    echo "\n";
    $michel->setAdresse("76 allee du chemin du druid");
    echo "\n";
}
//exo3();


function exo7() {
    $client1 = new Client("Wahid", "Gaius von valbazard");
    $client1->setCoord(14.24255, 7.43235);
    $client1->getClient();
}
//exo7();

function exo8() {
    $client1 = new \Firme\Client\Personne("14.24255, 7.432357", "TRS56");
    $client2 = new \Firme\Client\Personne("14.27424, 8.485589", "TB303");
    $Commercial1 = new \Firme\Commercial\Personne("12.62345, 6.432585", "KORG06");
}
//exo8();