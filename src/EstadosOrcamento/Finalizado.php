<?php

namespace ErickLira\Padrao\EstadosOrcamento;

use ErickLira\Padrao\Orcamento;

class Finalizado extends EstadoOrcamento
{
    public function calculaDescontoExtra(Orcamento $orcamento) :float
    {        
        throw new \DomainException("Um orçamento finalizado não pode receber desconto");        
    }
}

?>