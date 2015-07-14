<?php

namespace Padroes\Criacao\FactoryMethod\Motores;

use Padroes\Criacao\FactoryMethod\Interfaces\iMotor;

class MotorChevrolet implements iMotor {

	public function __construct(){
		$this->motorMontado();
	}

	public function cabecote(){
		return "Chevrolet 64";
	}

	public function pistao(){
		return "XZ-4";
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