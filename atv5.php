<?php
/*
Escreva um programa em PHP para somar todos os números pares num
intervalo de 10 a 500 e apresentar a soma.
*/
echo "atv 5";

echo "";

$Q = 10;
$R = 500;
$soma = 0;

for($f = $Q; $f <= $R; $f +=2){

if($f % 2 == 0){
$soma += $f;
}
}

echo "A SOMA DE TODOS OS NÚMEROS DE 10 ATÉ 500 É: ".$soma;

?>