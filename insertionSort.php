<?php


// Encontrar o menor valor
// InsertionSort

$values = [2,4,5,2,6,8,22,1];
$menor =  0;

for ($i=0; $i < count($values); $i++) { 
  if($values[$i] < $values[$menor]){
    $menor = $i;
  }
}
echo "menor valor é:" . $values[$menor];


