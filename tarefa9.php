<?php


$valor= 1500;
$desc= 7/100;
$prodDesc= $valor * $desc;
$descProd= $valor - ($valor * $desc);

echo "Esse é o valor do produto" .$valor;
echo "   Seu desconto é de " .$prodDesc;
echo "   Seu produto com desconto é " .$descProd;

?>