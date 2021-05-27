<?php

// Cria uma lista de idades e acessa os valores.
$idadeList = [21, 23, 19, 25, 30, 41, 18];
$umaIdade = $idadeList[2];
echo $umaIdade[0] . PHP_EOL;

//Unpacking em php
list($idadeVinicius, $idadeJoao, $idadeMaria) = $idadeList;


// Adiciona num índice específico.
$idadeList[7] = 20;

//Adiciona no último índice.
$idadeList[] = 30;

for ($i=0; $i < count($idadeList); $i ++) {
    echo $idadeList[$i] . PHP_EOL;
}

//foreach
foreach ($idadeList as $idade ) {
    echo $idade . PHP_EOL;
}

//remoção de um item

unset($idadeList[0]);


echo $idadeList;