<?php

use ErickLira\Padrao\GerarPedido;

require_once 'vendor/autoload.php';

$valorOrcamento = $argv[1];
$numeroDeItens = $argv[2];
$nomeCliente = $argv[3];

$gerarPedido = new GerarPedido($valorOrcamento, $numeroDeItens, $nomeCliente);
$gerarPedidoHandler = new $gerarPedidoHandler(/* passa as depndencias, repository, email */);
$gerarPedidoHandler->execute($gerarPedido);