<?php

namespace Padroes\Criacao\AbstractFactory\Rodas;

use Padroes\Criacao\AbstractFactory\Interfaces\iRoda;

class RodaSX implements iRoda {

	private $aro = "21";
	private $espessura = "150mm";
	private $material = "Ferro";

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