<?php

require_once 'Produto.php';
require_once 'Lista.php';

$listaProdutos = new Lista();
menu($listaProdutos);

function menu($listaProd)
{
    echo "Escolha uma das opções" . PHP_EOL;
    echo "1 - Adicionar uma novo produto" . PHP_EOL;
    echo "2 - Listar todos os produtos" . PHP_EOL;
    echo "3 - Sair" . PHP_EOL;
    $option = readline("Escolha uma das opções: ");

    switch ($option) {
        case 1 :
            screenAddNewProd($listaProd);
            break;
        case 2 :
            screenListProd($listaProd);
            break;
        case 3:
            exit();
            break;
        default:
            menu($listaProd);
    }
}

function screenAddNewProd(Lista $listaProd)
{
    $prodName = readline("Nome do produto: ");
    $prodPrice = readline("Digite o preço do produto: ");

    $prod = new Produto($prodName, $prodPrice);
    $listaProd->addProduto($prod);

    echo "Deseja cadastrar mais um produto? S/n";
    $option = readline(': ');
    switch ($option) {
        case "s" :
            screenAddNewProd($listaProd);
            break;
        case "n" :
            menu($listaProd);
            break;
        default :
            screenAddNewProd($listaProd);
    }

}

function screenListProd(Lista $prodList)
{
    echo "Total de produtos: {$prodList->getTotal()}" . PHP_EOL;
    foreach ($prodList->getProdutos() as $key => $prod) {
        echo "$key - {$prod->getName()}, Value: {$prod->getPrice()}" . PHP_EOL;
    }
    echo "1 - voltar" . PHP_EOL;
    echo "2 - ordenar mais barato"  . PHP_EOL;
    echo "3 - ordenar mais caro"  . PHP_EOL;
    $opc = readline('Digite uma das opções: ');
    switch ($opc) {
        case 1 :
            menu($prodList);
            break;
        case 2 :
            $prodList->orderProducts();
            screenListProd($prodList);
            break;

    }
}
