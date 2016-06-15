<?php

class Vivant {
	
}

// ===================================
class Vegetal extends Vivant {

}

class Animal extends Vivant {

}
// ===================================

class Fruit extends Vegetal {

}

class Pomme extends Fruit {

}

class Golden extends Pomme {

}

$pomme = new Golden();

var_dump($pomme instanceOf Fruit); // boolean true
var_dump($pomme instanceOf Animal); // boolean false
var_dump($pomme instanceOf Vivant); // boolean true

echo get_class($pomme);