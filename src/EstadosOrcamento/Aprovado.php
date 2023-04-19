<?php

namespace ErickLira\Padrao\EstadosOrcamento;

use ErickLira\Padrao\Orcamento;

class Aprovado extends EstadoOrcamento
{
    public function calculaDescontoExtra(Orcamento $orcamento) :float
    {        
       return $orcamento->valor * 0.02;        
    }
}

?>