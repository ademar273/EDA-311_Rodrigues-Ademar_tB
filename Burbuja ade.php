<?php
function burbuja($arreglo) {
    $n = count($arreglo);
    
    for ($i = 0; $i < $n - 1; $i++) {
        for ($j = 0; $j < $n - $i - 1; $j++) {
            if ($arreglo[$j] > $arreglo[$j + 1]) {
                $temp = $arreglo[$j];
                $arreglo[$j] = $arreglo[$j + 1];
                $arreglo[$j + 1] = $temp;
            }
        }
    }
    
    return $arreglo;
}

$arreglo = [8, 1, 7, 9, 10, 1, 0, 10];

echo "Arreglo original: " . implode(", ", $arreglo) . "\n";

$ordenado = burbuja($arreglo);

echo "Arreglo ordenado: " . implode(", ", $ordenado) . "\n";
?>