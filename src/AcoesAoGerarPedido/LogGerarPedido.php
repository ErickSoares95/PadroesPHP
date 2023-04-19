<?php

namespace ErickLira\Padrao\AcoesAoGerarPedido;

use ErickLira\Padrao\Pedido;

class LogGerarPedido implements IAcaoAposGerarPedido
{
    public function executaAcao(Pedido $pedido):void
    {
        echo " Gerar log do pedido";
    }
}

?>