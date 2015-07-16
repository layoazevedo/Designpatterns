<?php

namespace Padroes\Criacao\FactoryMethod\Abstracts;

use Padroes\Criacao\FactoryMethod\Enum\EnunCarros;

abstract class Fabricar {

	protected $carroInvalido = 'Carro invalido';

	abstract public static function fazer(EnunCarros $Carro);
}