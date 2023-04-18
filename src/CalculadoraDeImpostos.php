<?php

namespace ErickLira\Padrao;

use ErickLira\Padrao\Impostos\Imposto;

class CalculadoraDeImpostos
{
    public function calcula(Orcamento $orcamento, Imposto $imposto): float
    {
        $imposto->calculaImposto($orcamento);
    }
}