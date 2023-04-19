<?php

use ErickLira\Padrao\AcoesAoGerarPedido\CriarPedidoNoBanco;
use ErickLira\Padrao\AcoesAoGerarPedido\EnviarPedidoPorEmail;
use ErickLira\Padrao\AcoesAoGerarPedido\LogGerarPedido;
use ErickLira\Padrao\GerarPedido;
use ErickLira\Padrao\GerarPedidoHandler;

require_once 'vendor/autoload.php';

$valorOrcamento = $argv[1];
$numeroDeItens = $argv[2];
$nomeCliente = $argv[3];

$gerarPedido = new GerarPedido($valorOrcamento, $numeroDeItens, $nomeCliente);
$gerarPedidoHandler = new GerarPedidoHandler(/* passa as depndencias, repository, email */);
$gerarPedidoHandler->adicionarAcaoAoGerarPedido(new CriarPedidoNoBanco);
$gerarPedidoHandler->adicionarAcaoAoGerarPedido(new EnviarPedidoPorEmail);
$gerarPedidoHandler->adicionarAcaoAoGerarPedido(new LogGerarPedido);
$gerarPedidoHandler->execute($gerarPedido);