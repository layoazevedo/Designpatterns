<?php

namespace Padroes\Criacao\FactoryMethod\Motores;

use Padroes\Criacao\FactoryMethod\Interfaces\iMotor;

class MotorV8 implements iMotor {

	private $cabecote = "CarText 1.4";
	private $pistao = "Pistao BR";
	private $valvula = "16 v";

	public function getCabecote(){
		return $this->cabecote;
	}

	public function getPistao(){
		return $this->pistao;
	}

	public function getValvula(){
		return $this->valvula;
	}
}