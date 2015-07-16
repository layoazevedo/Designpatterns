<?php

namespace Padroes\Criacao\AbstractFactory\Montadoras\Fiat;

use Padroes\Criacao\FactoryMethod\Carros\Vectra;
use Padroes\Criacao\FactoryMethod\Carros\Corsa;
use Padroes\Criacao\FactoryMethod\Motores\MotorChevrolet;
use Padroes\Criacao\FactoryMethod\Rodas\RodaX4;
use Padroes\Criacao\FactoryMethod\Rodas\RodaSX;

class GM extends Montadora {

	public static function fabricaMontadora(){

		$carros = array(
			new Vectra(new MotorChevrolet(), new RodaSX(),
			new Corsa(new MotorChevrolet(), new RodaX4()	
		);

		return $carros;
	}
}