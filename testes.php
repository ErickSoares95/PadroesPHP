<?php 
use ErickLira\Padrao\CalculadoraDeImpostos;
use ErickLira\Padrao\Impostos\Icms;
use ErickLira\Padrao\Orcamento;

require 'vendor/autoload.php';

$calculadora = new CalculadoraDeImpostos();

$orcamento = new Orcamento();
$orcamento->valor = 100;

echo $calculadora->calcula($orcamento, new Icms);