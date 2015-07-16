<?php

namespace Padroes\Criacao\FactoryMethod\Carros;

use Padroes\Criacao\FactoryMethod\Interfaces\iMotor;
use Padroes\Criacao\FactoryMethod\Interfaces\iRoda;
use Padroes\Criacao\FactoryMethod\Abstracts\Carro;

class Corsa extends Carro {

	protected $nomeCarro = "Corsa";
}