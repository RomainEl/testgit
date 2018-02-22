<?php

class Ordinateur {
	public $OS = 'Windows';
	public $marque = 'RAZER';
	public $format = 'portable';
	public $modele;

	public function showInfo() {
		return "je tourne suis un ordinateur de marque $this->marque, je tourne sous $this->OS. Je suis un $this->format de modèle $this->modele";
	}

	//public function ()
}

$ordinateur = new Ordinateur();
$ordinateur->OS;
$ordinateur->marque;
$ordinateur->format;
$ordinateur->modele="A125U";
echo $ordinateur->showInfo();