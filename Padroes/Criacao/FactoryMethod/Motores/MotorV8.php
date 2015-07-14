<?php

namespace Padroes\Criacao\FactoryMethod\Motores;

use Padroes\Criacao\FactoryMethod\Interfaces\iMotor;

class MotorV8 implements iMotor {

	public function __construct(){
		$this->motorMontado();
	}

	public function cabecote(){
		return "CarText 1.4";
	}

	public function pistao(){
		return "Pistao BR";
	}

	public function valvula(){
		return "16 v";
	}

	protected function motorMontado(){
		echo 
			"Cabecote: ".$this->cabecote()."<br />".
			"Pistao: ".$this->pistao()."<br />".
			"Valvula: ".$this->valvula()."<br />";
	}
}