<?php 

namespace ErickLira\Padrao\AcoesAoGerarPedido;

use ErickLira\Padrao\Pedido;

interface IAcaoAposGerarPedido
{
    public function executaAcao(Pedido $pedido): void;

}