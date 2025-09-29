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

while(!$exit){
    echo "########################### Outil de gestion du Zoo ###########################\n";
    $action = readline("Veuillez entrez votre action (1) passer 1 jour, (2) effectuez une commande et passer 1 jour :");

    switch($action) {
        case 1 :
            Zoo::incDay();
            Zoo::ouvrirLesPorte();
        break;
        case 2 : 
            $nmb = readline("Entrez le nombre d'animal que vous voulez vous faire livrer : ");
            Zoo::livraison($nmb);
            Zoo::ouvrirLesPorte();
       
        break;
        }
}


?>