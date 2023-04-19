<?php 

namespace ErickLira\Padrao;

use ArrayIterator;
use ErickLira\Padrao\EstadosOrcamento\Finalizado;

/**
 * Summary of ListaDeOrcamentos
 */
class ListaDeOrcamentos implements \IteratorAggregate
{
    /**
     * @var Orcamento[]
     */
    private array $orcamentos;

    public function __construct()
    {
        $this->orcamentos = [];
    }

    public function addOrcamento(Orcamento $orcamento)
    {
        $this->orcamentos[] = $orcamento;
    }

    /**
     * Summary of getIterator
     * @return \ArrayIterator
     */
    public function getIterator() : ArrayIterator
    {
            return new ArrayIterator($this->orcamentos);        
    }

    public function orcamentosFinalizados(): array
{
    return array_filter(
        $this->orcamentos,
        fn (Orcamento $orcamento) => $orcamento->estadoAtual instanceof Finalizado
    );
}
}