<?php

$valores1 = [3, 5, 7, 9,12,88,112];
$valores2 = [2, 4, 6, 8, 10, 1024];

echo "RES: ". PHP_EOL;
print_r(MergeSort($valores1, $valores2));

function MergeSort($array1, $array2){

    $arrayResultado = array();


    $atualArray1 = 0;
    $atualArray2 = 0;
    $atual = 0;

    while ($atualArray1 < count($array1) && $atualArray2 < count($array2)) {
        $valor1 = $array1[$atualArray1];
        $valor2 = $array2[$atualArray2];

        if ($valor1 < $valor2) {
            // nota1 menor
            $arrayResultado[$atual] = $valor1;
            $atualArray1++;
        } else {
            //nota2 maior
            $arrayResultado[$atual] = $valor2;
            $atualArray2++;
        }
        $atual++;
    }

    while ($atualArray1 < count($array1)) {
        $arrayResultado[$atual] = $array1[$atualArray1];
        $atual++;
        $atualArray1++;
    }

    while ($atualArray2 < count($array2)) {
        $arrayResultado[$atual] = $array2[$atualArray2];
        $atual++;
        $atualArray2++;
    }


    return $arrayResultado;

}