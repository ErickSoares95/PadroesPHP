<?php

namespace ErickLira\Padrao\EstadosOrcamento;

use ErickLira\Padrao\Orcamento;
use ErickLira\Padrao\EstadosOrcamento\Finalizado;

class Reprovado extends EstadoOrcamento
{
    public function calculaDescontoExtra(Orcamento $orcamento) :float
    {        
        throw new \DomainException("Um orçamento reprovado não pode receber desconto");        
    }

    public function finaliza(Orcamento $orcamento)
    {
        $orcamento->estadoAtual = new Finalizado();
    }
}

?>