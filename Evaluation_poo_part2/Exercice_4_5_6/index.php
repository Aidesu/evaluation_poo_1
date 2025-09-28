<?php

include_once "./models/Form.php";
include_once "./models/Form2.php";

$formulaire2 = new Form2("Feur Formulaire");
echo $formulaire2->getForm();

$formulaire2_2 = new Form2("Another Formulaire","Username" , "Password", "Java", "JavaScript", "C++", "Shell");
echo $formulaire2_2->getForm();
?>
