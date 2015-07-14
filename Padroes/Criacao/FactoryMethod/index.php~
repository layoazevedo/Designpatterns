<?php
ini_set('display_errors',1);
ini_set('display_startup_erros',1);
error_reporting(E_ALL);

require_once("vendor/autoload.php");

use Classes\Concretas\Computador;
use Classes\Concretas\PlacaAsus;
use Classes\Concretas\ProcessadorIntel;
use Classes\Abstracts\AbstractPlaca;

$obj = new Computador(new PlacaAsus(), new ProcessadorIntel());

echo "<pre>";
print_r($obj);
