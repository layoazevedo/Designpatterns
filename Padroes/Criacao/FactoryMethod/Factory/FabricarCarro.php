<?php

namespace Padroes\Criacao\FactoryMethod\Factory;

use Padroes\Criacao\FactoryMethod\Abstracts\Fabricar;
use Padroes\Criacao\FactoryMethod\Enum\EnunCarros;
use Padroes\Criacao\FactoryMethod\Enum\EnunCabecotes;
use Padroes\Criacao\FactoryMethod\Enum\EnunVavlula;
use Padroes\Criacao\FactoryMethod\Carros\Palio;
use Padroes\Criacao\FactoryMethod\Carros\Vectra;
use Padroes\Criacao\FactoryMethod\Carros\Corsa;
use Padroes\Criacao\FactoryMethod\Motores\MotorV8;
use Padroes\Criacao\FactoryMethod\Motores\MotorChevrolet;
use Padroes\Criacao\FactoryMethod\Rodas\RodaX4;
use Padroes\Criacao\FactoryMethod\Rodas\RodaSX;
use Exception;

class FabricarCarro extends Fabricar {

	public static function fazer(EnunCarros $Carro){
 
        try {
            if (!$Carro instanceof EnunCarros) {
                throw new Exception($this->getErro());
            }
        } catch (Exception $e) {
            echo 'Erro: ',  $e->getMessage(), "\n";
        }

        
		switch ($Carro) {
    		case EnunCarros::PALIO:
        		return new Palio(
                    new MotorV8(
                        EnunCabecotes::X1, 
                        EnunVavlula::V4), 
                    new RodaX4()
                );
        	break;

        	case EnunCarros::VECTRA:
        		return new Vectra(
                    new MotorChevrolet(
                        EnunCabecotes::X1, 
                        EnunVavlula::V4), 
                    new RodaX4()
                );
        	break;

        	case EnunCarros::CORSA:
        		return new Corsa(
                    new MotorChevrolet(
                        EnunCabecotes::X2, 
                        EnunVavlula::V3), 
                    new RodaX4()
                );
        	break;
	   }

    private function getErro(){
        return $this->carroInvalido;
    }
}