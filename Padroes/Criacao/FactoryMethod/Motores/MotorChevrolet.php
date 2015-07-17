<?php

namespace Padroes\Criacao\FactoryMethod\Motores;

use Padroes\Criacao\FactoryMethod\Abstracts\Carro;

class MotorChevrolet extends Motor {

	public function ligar()
	{
		echo "Ligar";
	}
}
