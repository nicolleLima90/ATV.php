<?php

/*
Faça um programa em PHP que defina uma variável com o peso e a altura
de uma pessoa. Calcule e mostre o IMC.
*/

echo "atv 3";

echo "";
echo "ALTURA: 1.50";
echo "PESO: 60";

$altura = 1.50;
$peso = 60;

echo "";

$imc = $peso / ($altura*$altura);
echo "O IMC É: ".number_format($imc, 2);

echo "";

?>