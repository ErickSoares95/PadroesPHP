<?php

namespace ErickLira\Padrao\AcoesAoGerarPedido;

use ErickLira\Padrao\Pedido;

class EnviarPedidoPorEmail implements IAcaoAposGerarPedido
{
    public function executaAcao(Pedido $pedido):void
    {
        echo " Enviar pedido pelo email";
    }
}

?>