<?php

namespace Padroes\Criacao\AbstractFactory\Motores;

use Padroes\Criacao\AbstractFactory\Interfaces\iMotor;

class MotorChevrolet implements iMotor {

	private $cabecote = "Chevrolet 64";
	private $pistao = "XZ-4";
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