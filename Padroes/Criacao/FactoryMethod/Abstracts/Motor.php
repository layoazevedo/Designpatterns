<?php

namespace Padroes\Criacao\FactoryMethod\Abstracts;

use Padroes\Criacao\FactoryMethod\Interfaces\iMotor;
use Padroes\Criacao\FactoryMethod\Enum\EnumCabecotes;
use Padroes\Criacao\FactoryMethod\Enum\EnumValvula;

abstract class Motor implements iMotor {

	protected $cabecote;
	protected $valvula;

	public function __construct(EnumCabecotes $cabecote, EnumValvula $valvula)
	{

		try {
        	if (!$cabecote instanceof EnumCabecotes || 
				!$valvula instanceof EnumValvula) {
            		throw new \Exception('Tipo de classe invalida');
        	}
    	} catch (Exception $e) {
   			 echo 'Erro: ',  $e->getMessage(), "\n";
   		}
		
		$this->cabecote = $cabecote;
		$this->pistao = $pistao;
	}
}
