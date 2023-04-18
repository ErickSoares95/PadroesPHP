<?php 
namespace ErickLira\Padrao\Impostos;

use ErickLira\Padrao\Orcamento;

class Iss implements Imposto
{
    public function calculaImposto(Orcamento $orcamento) :float
    {
        return $orcamento->valor *0.06;
    }
}