<?php
require_once("../../../Erros/MostrarErros.php");
require_once("../../../vendor/autoload.php");

use Padroes\Criacao\AbstractFactory\Factory\FabricarMontadora;
use Padroes\Criacao\AbstractFactory\Enum\EnunMontadoras;	

FabricarMontadora::fazer(EnunMontadoras::GM);
FabricarMontadora::fazer(EnunMontadoras::FIAT);