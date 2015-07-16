<?php

namespace Padroes\Criacao\AbstractFactory\Montadoras\Fiat;

use Padroes\Criacao\FactoryMethod\Carros\Palio;
use Padroes\Criacao\FactoryMethod\Motores\MotorV8;
use Padroes\Criacao\FactoryMethod\Rodas\RodaX4;

class Fiat extends Montadora {

	public static function builderMontadora(){

		$carros = array(
			new Palio(new MotorV8(), new RodaX4())
		);

		return $carros;
	}
}