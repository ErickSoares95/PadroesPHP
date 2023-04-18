<?php 
namespace ErickLira\Padrao\Impostos;

use ErickLira\Padrao\Orcamento;

interface Imposto 
{
    public function calculaImposto(Orcamento $orcamento) :float;
}