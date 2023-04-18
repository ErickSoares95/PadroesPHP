<?php 
namespace ErickLira\Padrao\Impostos;

use ErickLira\Padrao\Orcamento;

class Icms implements Imposto
{
    public function calculaImposto(Orcamento $orcamento) :float
    {
        return $orcamento->valor *0.1;
    }
}