<?php 

require "classes/automobile.php";

$auto1 = new Automobile(20);
$auto1->demarrer();
$auto1->accellerer();
$auto1->accellerer();
$auto1->accellerer();
$auto1->freiner();
$auto1->arreter();
$auto1->freiner();
$auto1->arreter();

$auto1->bonjour();

//Automobile::$langue = "en";
Automobile::changerLangue("en");
$car1 = new Automobile(20);
$car1->bonjour();