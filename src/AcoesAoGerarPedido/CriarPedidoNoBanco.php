<?php

namespace ErickLira\Padrao\AcoesAoGerarPedido;

use ErickLira\Padrao\Pedido;

class CriarPedidoNoBanco implements IAcaoAposGerarPedido
{
    public function executaAcao(Pedido $pedido):void
    {
        echo $pedido->nomeCliente;
        echo " Salvando pedido no banco";
    }
}

?>