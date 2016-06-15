<?php 
echo "<meta charset='utf-8'/>";

require "classes/Vehicule.php";
require "classes/Automobile.php";
require "classes/Moto.php";

$auto = new Automobile(5);
$auto->affiche();

$moto = new Moto();
$moto->affiche();