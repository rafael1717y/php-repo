<?php

$learn = array('Conditionals', 'Arrays', 'Loops');
var_dump($learn);
echo $learn[1];
//echo $learn;

// Exibindo um array
// -----------------
echo implode("\n", $learn);

// Adicionando elementos a um array
// --------------------------------
$learn[] = 'Build something awesome';
var_dump($learn);

// Add mais de um elemento com array push - final do array
// -------------------------------------------------------
array_push($learn, 'Functions', 'Forms', 'Objects');
var_dump($learn);

// Adiciona no começo do array
// ---------------------------

array_unshift($learn, 'HTML', 'CSS');
var_dump($learn);

// Removendo elementos de um array
// -------------------------------
echo 'your removed ' . array_shift($learn);
var_dump($learn);

echo 'your removed ' . array_pop($learn);
var_dump($learn);

// Removendo um elemento a partir de um índice
unset($learn[1], $learn[2]);
var_dump($learn);

// 
$learn = array_values($learn);
var_dump($learn);

// Destruindo um array
//unset($learn);


//$learn = 'my learning list';

// Atualizando um elemento de um array
$learn[0] = 'Email';
var_dump($learn);



$colors = array("Red","Green","Blue");


array_unshift($colors, 'Yellow');
array_push($colors, 'Black');

$colors[1] = 'Magenta';
$colors[3] = 'Cyan';

var_dump($colors);














?>