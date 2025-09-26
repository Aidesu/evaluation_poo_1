<?php

include_once "./models/Animals.php";
include_once "./models/Visitors.php";
include_once "./models/Zoo.php";


$Michel = new Animals("loup garou", "carnivore");
$Gerome = new Animals("loup garou", "carnivore");
$Bertrant = new Animals("licorne", "herbivore");
$Sophie = new Animals("licorne", "herbivore");

$visitor1 = new Visitors("Joao", true, 1);
$visitor2 = new Visitors("Wahid", true, 1);
$visitor3 = new Visitors("Brian", true, 1);


Zoo::vendreBillets("Jordan", 1, false);
Zoo::vendreBillets("Valentin", 1);
Zoo::vendreBillets("Carla", 5);

Zoo::livraison(5);

Zoo::ouvrirLesPorte();

$exit = false;

while($exit){

}


?>