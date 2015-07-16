<?php

namespace Padroes\Criacao\AbstractFactory\Abstracts;

use Padroes\Criacao\AbstractFactory\Enum\EnumMontadoras;

abstract class Fabricar {

	protected $montadoraInvalida = 'Montadora invalida';

	abstract public static function fazer(EnumMontadoras $montadora);
}