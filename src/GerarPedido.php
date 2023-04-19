<?php 

namespace ErickLira\Padrao;

class GerarPedido
{

    private $valorOrcamento;
    private $numeroDeItens;
    private $nomeCliente;

    public function __construct(
        float $valorOrcamento,
        int $numeroDeItens,
        string $nomeCliente
    )
    {
        $this->valorOrcamento = $valorOrcamento;
        $this->numeroDeItens = $numeroDeItens;
        $this->nomeCliente = $nomeCliente;
    }

        /**
         * Get the value of valorOrcamento
         */ 
        public function getValorOrcamento()
        {
                return $this->valorOrcamento;
        }

        /**
         * Set the value of valorOrcamento
         *
         * @return  self
         */ 
        public function setValorOrcamento($valorOrcamento)
        {
                $this->valorOrcamento = $valorOrcamento;

                return $this;
        }

        /**
         * Get the value of numeroDeItens
         */ 
        public function getNumeroDeItens()
        {
                return $this->numeroDeItens;
        }

        /**
         * Set the value of numeroDeItens
         *
         * @return  self
         */ 
        public function setNumeroDeItens($numeroDeItens)
        {
                $this->numeroDeItens = $numeroDeItens;

                return $this;
        }

        /**
         * Get the value of nomeCliente
         */ 
        public function getNomeCliente()
        {
                return $this->nomeCliente;
        }

        /**
         * Set the value of nomeCliente
         *
         * @return  self
         */ 
        public function setNomeCliente($nomeCliente)
        {
                $this->nomeCliente = $nomeCliente;

                return $this;
        }   
}