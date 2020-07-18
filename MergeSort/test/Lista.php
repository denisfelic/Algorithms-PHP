<?php

require_once 'Produto.php';

class Lista
{
    /**
     * @param array $produtos
     */
    private array $produtos = [];
    private int $count = 0;

    /**
     * Lista constructor.
     * @param array $produtos
     */
    public function __construct()
    {
    }

    /**
     * @return Produto[]
     */
    public function getProdutos()
    {
        return $this->produtos;
    }

    /**
     * @param array $produtos
     */
    public function addProduto(Produto $produto)
    {
        $this->produtos[$this->count] = $produto;
        $this->count++;
    }

    public function getTotal()
    {
        return $this->count;
    }

    public function orderProducts()
    {

        $maisBarato = 0;
        $atual = 0;
        $produtos =  $this->getProdutos();

        for ($atual = 1; $atual < $this->getTotal(); $atual++) {
            $analiseAtual = $atual;
            $anterior = $atual - 1;

            while ($produtos[$analiseAtual]->getPrice() < $produtos[$anterior]->getPrice()) {
                $produtoComMaiorValor = $produtos[$analiseAtual];
                $produtos[$analiseAtual] = $produtos[$anterior];
                $produtos[$anterior] = $produtoComMaiorValor;
                $analiseAtual--;
            }
        }

       $this->produtos = $produtos;

    }

}