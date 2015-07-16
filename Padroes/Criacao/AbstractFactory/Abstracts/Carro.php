<?php

namespace Padroes\Criacao\AbstractFactory\Abstracts;

use Padroes\Criacao\AbstractFactory\Interfaces\iMotor;
use Padroes\Criacao\AbstractFactory\Interfaces\iRoda;

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