<?php

use ErickLira\Padrao\CalculadoraDeDescontos;
use ErickLira\Padrao\CalculadoraDeImpostos;
use ErickLira\Padrao\Impostos\Icms;
use ErickLira\Padrao\Orcamento;

require 'vendor/autoload.php';

//STRATEGY TESTE
// $calculadora = new CalculadoraDeImpostos();
// $orcamento = new Orcamento();
// $orcamento->valor = 100;
// echo $calculadora->calcula($orcamento, new Icms);

//Chain of Responsability TESTE
$calculadora = new CalculadoraDeDescontos();
$orcamento = new Orcamento();
$orcamento->valor = 600;
$orcamento->quantidadeItens = 6;
echo $calculadora->calcularDescontos($orcamento);

?>