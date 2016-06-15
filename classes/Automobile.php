<?php

class Automobile {
	
	// propriétés
	public $consommation; // 10l/100Kms
	protected $carburant; // essence, diesel, gpl, etc
	protected $marque; // ferrari, citroen, etc
	protected $modele; // C4, R5, etc
	protected $portes; // 3, 5 portes
	protected $roues = 4;
	protected $frequence_revision; // 10 000 Km
	protected $vitesse;
	protected $vitesseMax;
	protected $moteur = 0; // 0:eteint, 1:allumé

	// méthodes

	public function __construct($v_max){
		$this->vitesseMax = $v_max;
	}

	// démarrer, arreter, accellerer, avancer, reculer, freiner, faire_le_plein, allumer_les_phares, etc

	protected function etatAuto() {
		echo "<p>vitesse : " . $this->vitesse . " Km/h</p>";
		if($this->moteur == 0){
			echo "<p style='color:red;'><strong>Moteur arreter !</strong></p>";
		} else {
			echo "<p style='color:green;'><strong>Moteur allumer !</strong></p>";
		}
		echo "<hr />";
	}

	public function demarrer() {
		$this->vitesse = 0;
		$this->moteur = 1;
		echo "<p>Démarage en cours..</p>";
		$this->etatAuto();
	}

	public function arreter() {
		if($this->vitesse == 0){
			echo "<p>Arret de la voiture..</p>";
			$this->moteur = 0;
		} else {
			echo "<p>Arret de la voiture impossible. Vous devez ralentir la vitesse à 0</p>";
		}
		$this->etatAuto();
	}

	public function accellerer() {
		if($this->vitesse >= 0 && $this->vitesse < $this->vitesseMax){
			echo "<p>Accélération en cours..</p>";
			$this->vitesse += 10;
		} else {
			echo "<p>Vous etes a fond</p>";
		}
		$this->etatAuto();
	}

	public function freiner() {
		if($this->vitesse >= 0){
			echo "<p>Freinage en cours..</p>";
			$this->vitesse -= 10;
		} else {
			echo "<p>Vous etes à l'arret!!</p>";
			$this->vitesse = 0;
		}
		$this->etatAuto();
	}

}

echo '<meta charset="utf-8" />';

// $auto1 = new Automobile(20);
// $auto1->demarrer();
// $auto1->accellerer();
// $auto1->accellerer();
// $auto1->accellerer();
// $auto1->freiner();
// $auto1->arreter();
// $auto1->freiner();
// $auto1->arreter();
