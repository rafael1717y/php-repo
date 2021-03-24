<?php
/* Linguagem dinamicamente tipada
*/

$idade = 21;
$salario = 1000.301;
$divisao = 10/ 3;
$texto = "olá mundo";
//Descobrir o tipo da variável
$verdadeiro = true;
$falso = false;

echo gettype($idade); //integer
echo "*********";
echo gettype($salario); //double
echo gettype($divisao);
echo "*****";
echo $divisao;
echo gettype($texto); //string
echo gettype($verdadeiro); //boolean

//Double -> número decimal com maior precisão --- float
