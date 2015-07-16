<?php

namespace Padroes\Criacao\FactoryMethod\Rodas;

use Padroes\Criacao\FactoryMethod\Interfaces\iRoda;

class RodaX4 implements iRoda {

	private $aro = "18";
	private $espessura = "50mm";
	private $material = "Aluminio";

	public function getAro() {
		return $this->aro;
	}
	
	public function getEspessura() {
		return $this->espessura;
	}
	
	public function getMaterial() {
		return $this->material;
	}
}