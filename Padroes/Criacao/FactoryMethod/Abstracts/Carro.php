<?php

namespace Padroes\Criacao\FactoryMethod\Abstracts;

use Padroes\Criacao\FactoryMethod\Interfaces\iMotor;
use Padroes\Criacao\FactoryMethod\Interfaces\iRoda;

abstract class Carro {

	protected $motor;
	protected $roda;
	protected $nomeCarro;

	public function __construct(iMotor $Motor, iRoda $Roda){ 
		$this->motor = $Motor;
		$this->roda = $Roda;
	}

	public function getCarro(){
		return $this->nomeCarro;
	}
}