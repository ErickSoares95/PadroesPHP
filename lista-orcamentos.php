<?php

require_once 'vendor/autoload.php';

use ErickLira\Padrao\ListaDeOrcamentos;
use ErickLira\Padrao\Orcamento;

$orcamento1 = new Orcamento();
$orcamento1->quantidadeItens = 7;
$orcamento1->aprova();
$orcamento1->valor = 1500.75;

$orcamento2 = new Orcamento();
$orcamento2->quantidadeItens = 9;
$orcamento2->aprova();
$orcamento2->valor = 1200.75;

$orcamento3 = new Orcamento();
$orcamento3->quantidadeItens = 5;
$orcamento3->aprova();
$orcamento3->valor = 1300.75;

$listaOrcamentos = new ListaDeOrcamentos();
$listaOrcamentos->addOrcamento($orcamento1);
$listaOrcamentos->addOrcamento($orcamento2);
$listaOrcamentos->addOrcamento($orcamento3);

foreach ($listaOrcamentos as $orcamento) {
    echo "Valor" . $orcamento->valor .PHP_EOL;
    echo "Estado" . get_class($orcamento->estadoAtual) .PHP_EOL;
    echo "QTD. Itens" . $orcamento->quantidadeItens .PHP_EOL;
}