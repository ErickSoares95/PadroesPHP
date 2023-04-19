<?php 

namespace ErickLira\Padrao;

class GerarPedidoHandler
{
    public function __construct(/* pedidoRepository, MailService */)
    {
    }

    public function execute(GerarPedido $gerarPedido)
    {
        $orcamento = new Orcamento;
        $orcamento->quantidadeItens = $gerarPedido->getNumeroDeItens();
        $orcamento->valor = $gerarPedido->getValorOrcamento();

        $pedido = new Pedido();
        $pedido->dataFinalizacao = new \DateTimeImmutable();
        $pedido->nomeCliente = $gerarPedido->getNomeCliente();
        $pedido->orcamento = $orcamento;

        //
        echo "Cria pedido no banco de dados " . PHP_EOL;
        echo "Envia e-mail para cliente " . PHP_EOL;
    }
}

?>