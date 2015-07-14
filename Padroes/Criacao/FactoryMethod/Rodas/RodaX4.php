<?php

namespace Padroes\Criacao\FactoryMethod\Rodas;

use Padroes\Criacao\FactoryMethod\Interfaces\iRoda;

class RodaX4 implements iRoda {

	public function __construct(){
		$this->rodaMontada();
	}

	public function aro() {
		return "18";
	}
	
	public function espessura() {
		return "50mm";
	}
	
	public function material() {
		return "Aluminio";
	}

	protected function rodaMontada(){
		echo 
			"Aro: ".$this->aro()."<br />".
			"Espessura: ".$this->espessura()."<br />".
			"Material: ".$this->material()."<br /><hr />";
	}

}