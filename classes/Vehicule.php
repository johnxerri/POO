<?php

class Vehicule {
	// propriété d'instance ( = objet)
	protected $nbDeRoues;
	protected $nbDePlaces;

	function __construct($nb_roues, $nb_places) { //constructeur
		$this->nbDeRoues = $nb_roues;
		$this->nbDePlaces = $nb_places;
	}

	protected function nombreDeRoues() {
		echo "<p>Nombre de roues : " . $this->nbDeRoues . "</p>";
	}

	protected function nombreDePlaces() {
		echo "<p>Nombre de places : " . $this->nbDePlaces . "</p>";
	}

}