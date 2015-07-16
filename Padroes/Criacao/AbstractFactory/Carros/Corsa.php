<?php

namespace Padroes\Criacao\AbstractFactory\Carros;

use Padroes\Criacao\AbstractFactory\Interfaces\iMotor;
use Padroes\Criacao\AbstractFactory\Interfaces\iRoda;
use Padroes\Criacao\AbstractFactory\Abstracts\Carro;

class Corsa extends Carro {

	protected $nomeCarro = "Corsa";
}