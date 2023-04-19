<?php 

namespace ErickLira\Padrao;

use ErickLira\Padrao\AcoesAoGerarPedido\IAcaoAposGerarPedido;

class GerarPedidoHandler
{
    private array $acoesAposGerarPedido = [];
    public function __construct(/* pedidoRepository, MailService */)
    {
    }

    public function adicionarAcaoAoGerarPedido(IAcaoAposGerarPedido $acao)
    {
        $this->acoesAposGerarPedido[] = $acao;
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

        foreach ($this->acoesAposGerarPedido as $acao) {
            $acao->executaAcao($pedido);
        }
    }
}

?>