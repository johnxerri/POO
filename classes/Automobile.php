<?php

class Automobile extends Vehicule {
	
	function __construct($nb_places){
		parent::__construct(4, $nb_places);
	}

	public function affiche() {
		echo "<p>Je suis une automobile à {$this->nbDeRoues} roues et {$this->nbDePlaces} places</p>";
		echo "<p>";
		for ($i=0; $i < $this->nbDeRoues; $i++) { 
			echo "()";
		}
		echo "</p>";
	}

}
