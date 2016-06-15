<?php

class Moto extends Vehicule {
	
	function __construct(){
		parent::__construct(2, 2);
	}

	public function affiche() {
		echo "<p>Je suis une moto à {$this->nbDeRoues} roues et {$this->nbDePlaces} places</p>";
	}

}
