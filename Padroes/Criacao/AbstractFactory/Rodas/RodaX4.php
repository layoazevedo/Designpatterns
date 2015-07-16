<?php

namespace Padroes\Criacao\AbstractFactory\Rodas;

use Padroes\Criacao\AbstractFactory\Interfaces\iRoda;

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