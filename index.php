<?php 

class MaClasse {

	// propriétés (variables)
	public $a = 1; // visibilité publique : cette propriété est accessible depuis l'exterieur de la classe
	protected $b = "test"; // visibilité protected : accessible seulement à l'intérieur de la classe et de sa descendance
	private $c; // visibilité private : accessible seulement à l'intérieur de la classe

	// méthode constructeur
	function __construct($arg1, $arg2, $arg3) {

		// this represente mon objet
		$this->a = $arg1;
		$this->b = $arg2;
		$this->c = $arg3;

	}

	function __destruct() {
		echo "<p>Je meurs...</p>";
	}

	// méthodes
	public function afficheA() {
		echo '<p>' . $this->a . '</p>';
	}

	protected function getC() {
		return $this->c;
	}

	public function afficheC() {
		var_dump($this->getC());
	}

}

$objet_1 = new MaClasse(2, "toto", [1,2,3]);
$objet_2 = new MaClasse(3, "titi", [4,5,6]);
// $objet_2->afficheA();
// $objet_1->afficheA();

$objet_1->afficheC();

// echo '<p>' . $objet->b . '</p>';
// $objet->c = 10.2;
// echo '<p>' . $objet->c * 2 . '</p>';

// var_dump($objet_1);
// var_dump($objet_2);