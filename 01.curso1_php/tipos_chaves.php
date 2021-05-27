<?php 

// Arrays associativos (tipo númerico inteiro e strigs)
// Strings contendo inteiros válidos, serão convertidos para o tipo inteiro.
// Doc Php - Tabela de Comparação de Tipos


// Evitar. Usar o mesmo tipo para as chaves.
$array = [
    1 => 'a', 
    '1' => 'b',
    1.5 => 'c',
    true => 'd'
];

foreach ($array as $item) {
    echo $item . PHP_EOL;
}

