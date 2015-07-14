<?php

namespace Padroes\Criacao\FactoryMethod\Rodas;

use Padroes\Criacao\FactoryMethod\Interfaces\iRoda;

class RodaSX implements iRoda {

	public function __construct(){
		$this->rodaMontada();
	}

	public function aro() {
		return "21";
	}
	
	public function espessura() {
		return "150mm";
	}
	
	public function material() {
		return "Ferro";
	}

	protected function rodaMontada(){
		echo 
			"Aro: ".$this->aro()."<br />".
			"Espessura: ".$this->espessura()."<br />".
			"Material: ".$this->material()."<br /><hr />";
	}

}