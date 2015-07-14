<?php

namespace Padroes\Criacao\FactoryMethod\Carros;

use Padroes\Criacao\FactoryMethod\Interfaces\iMotor;
use Padroes\Criacao\FactoryMethod\Interfaces\iRoda;
use Padroes\Criacao\FactoryMethod\Abstracts\Carro;

class Corsa {

	private $motor;
	private $roda;
	protected $nomeCarro = "Corsa";

	public function __construct(iMotor $Motor, iRoda $Roda){ 
		$this->motor = $Motor;
		$this->roda = $Roda;
	}

	public function getCarro(){
		return $this->nomeCarro;
	}
}