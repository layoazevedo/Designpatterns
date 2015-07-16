<?php
require_once("../../../Erros/MostrarErros.php");
require_once("../../../vendor/autoload.php");

use Padroes\Criacao\FactoryMethod\Factory\FabricarCarro;
use Padroes\Criacao\FactoryMethod\Enum\EnunCarros;	

FabricarCarro::fazer(EnunCarros::PALIO);
FabricarCarro::fazer(EnunCarros::VECTRA);
FabricarCarro::fazer(EnunCarros::CORSA);