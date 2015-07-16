<?php

namespace Padroes\Criacao\AbstractFactory\Carros;

use Padroes\Criacao\AbstractFactory\Interfaces\iMotor;
use Padroes\Criacao\AbstractFactory\Interfaces\iRoda;
use Padroes\Criacao\AbstractFactory\Abstracts\Carro;

class Palio extends Carro {

	protected $nomeCarro = "Palio";
}