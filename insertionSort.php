<?php


$maisBarato = 0;
$atual = 0;
$produtos =  [1000, 46, 16, 42, 17];

echo "Antes" . PHP_EOL;
imprimeArray($produtos);

for ($atual = 1; $atual < count($produtos); $atual++) {
  $analiseAtual = $atual;
  $anterior = $atual-1;

  while ( $produtos[$analiseAtual] > $produtos[$anterior]) {
    $produtoComMaiorValor = $produtos[$analiseAtual];
    $produtos[$analiseAtual] = $produtos[$anterior];
    $produtos[$anterior] = $produtoComMaiorValor;
    $analiseAtual--;
  }
}

echo "Depois" . PHP_EOL;
imprimeArray($produtos);


function imprimeArray($array)
{
  for ($i = 0; $i < count($array); $i++) {
    echo $array[$i] . PHP_EOL;
  }
}
