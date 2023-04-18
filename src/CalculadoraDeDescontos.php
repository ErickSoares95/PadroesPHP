<?php 

namespace ErickLira\Padrao;

use ErickLira\Padrao\Descontos\DescontoMaisDe500Reais;
use ErickLira\Padrao\Descontos\DescontoMaisDe5Itens;
use ErickLira\Padrao\Descontos\SemDesconto;

class CalculadoraDeDescontos
{
    public function calcularDescontos(Orcamento $orcamento): float
    {
        $cadeiaDeDescontos = new DescontoMaisDe5Itens(
            new DescontoMaisDe500Reais(
                new SemDesconto()
            )
    );

    return $cadeiaDeDescontos->calculaDesconto($orcamento);

    }
}

?>