<?php

namespace Padroes\Criacao\FactoryMethod\Carros;

use Padroes\Criacao\FactoryMethod\Interfaces\iMotor;
use Padroes\Criacao\FactoryMethod\Interfaces\iRoda;
use Padroes\Criacao\FactoryMethod\Abstracts\Carro;

class Palio {

	private $motor;
	private $roda;
	public $nomeCarro = "Palio";

	public function __construct(iMotor $Motor, iRoda $Roda){ 
		$this->motor = $Motor;
		$this->roda = $Roda;
	}

	public function getCarro(){
		return $this->nomeCarro;
	}
}