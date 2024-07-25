<?php

$product=2450;
$juros=16/100;
$valPro= $product + $product * $juros;
$parcela= $valPro / 10;

echo "Valor do produto com o juros " .$valPro ;
echo "-------Valor da parcela " .$parcela ;

?>