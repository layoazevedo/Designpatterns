<?php
require_once("../../../Erros/MostrarErros.php");
require_once("../../../vendor/autoload.php");

use Padroes\Criacao\FactoryMethod\Factory\FabricarCarro;

$palio  = FabricarCarro::fabricarPalio();
$vectra = FabricarCarro::fabricarVectra();
$corsa  = FabricarCarro::fabricarCorsa();