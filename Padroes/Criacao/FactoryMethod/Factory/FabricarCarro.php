<?php

namespace Padroes\Criacao\FactoryMethod\Factory;

use Padroes\Criacao\FactoryMethod\Carros\Palio;
use Padroes\Criacao\FactoryMethod\Carros\Vectra;
use Padroes\Criacao\FactoryMethod\Carros\Corsa;
use Padroes\Criacao\FactoryMethod\Motores\MotorV8;
use Padroes\Criacao\FactoryMethod\Motores\MotorChevrolet;
use Padroes\Criacao\FactoryMethod\Rodas\RodaX4;
use Padroes\Criacao\FactoryMethod\Rodas\RodaSX;

class FabricarCarro {

	public static function fabricarPalio(){
		return new Palio(new MotorV8(), new RodaX4());
	} 

	public static function fabricarVectra(){
		return new Vectra(new MotorChevrolet(), new RodaSX());
	} 

	public static function fabricarCorsa(){
		return new Corsa(new MotorChevrolet(), new RodaX4());
	} 
}