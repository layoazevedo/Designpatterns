<?php

namespace Padroes\Criacao\AbstractFactory\Factory;

use Padroes\Criacao\AbstractFactory\Abstracts\Fabricar;
use Padroes\Criacao\AbstractFactory\Enum\EnunCarros;
use Padroes\Criacao\AbstractFactory\Enum\EnumMontadoras;
use Padroes\Criacao\AbstractFactory\Montadoras\Fiat;
use Padroes\Criacao\AbstractFactory\Montadoras\GM;
use Exception;

class FabricarMontadora extends Fabricar {

	public static function fazer(EnumMontadoras $montadora){

        if (!$Carro instanceof EnumMontadoras) {
            throw new Exception($this->getErro());
        }

		switch ($montadora) {
            case EnumMontadoras::GM:
                return GM::builderMontadora();
            break;

    		case EnumMontadoras::FIAT:
        		return Fiat::builderMontadora();
        	break;

        	default:
       			throw new Exception($this->getErro());
            }
	   }

    private function getErro(){
        return $this->montadoraInvalida;
    }
}