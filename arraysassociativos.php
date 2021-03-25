<?php

//Arrays numéricos (ou indexados) têm como característica possuírem apenas números inteiros em suas chaves, enquanto arrays associativos têm strings como chaves.
// A diferença é teórica pois o interpretador do PHP não faz distinção desses 2 tipos, nos permitindo inclusive criar arrays que contenha tanto inteiros quanto
// strings como chaves.

$conta1 = [
    'titular' => 'Vinicius',
    'saldo' => 1000];

$conta2 = ['titular' => 'Maria',
    'saldo' => 10000];

$conta3 = ['titular' => 'Alberto',
    'saldo' => 500];

echo $conta1['titular'];

$contasCorrentes = [$conta1, $conta2, $conta3];

for ($i = 0; $i < count($contasCorrentes); $i++) {
    echo $contasCorrentes[$i]['titular'] . PHP_EOL;
}


// Forma mais legível
foreach ($contasCorrentes as $conta) {
    echo $conta['titular'] . PHP_EOL;
}


$contasCorrentes = [
    12345678910 => [
        'titular' => 'Vinicius',
        'saldo' => 1000
    ],
    12345678911 => [
        'titular' => 'Maria',
        'saldo' => 10000
    ],
    12325678912 => [
        'titular' => 'Alberto',
        'saldo' => 300
    ]
];

foreach ($contasCorrentes as $cpf => $conta) {
    echo $conta['titular'] . PHP_EOL;
}












