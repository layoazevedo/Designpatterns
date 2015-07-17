<?php

namespace Padroes\Criacao\FactoryMethod\Motores;

use Padroes\Criacao\FactoryMethod\Abstracts\Carro;

class MotorV8 extends Motor {

	public function ligar()
	{
		echo "Ligar";
	}
}
