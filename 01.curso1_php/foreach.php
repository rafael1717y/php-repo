<?php

$conta1 = [
    'titular' => 'Vinicius',
    'saldo' => 1000
];

$conta2 = [
    'titular' => 'Maria',
    'saldo' => 10000
];

$conta3 = [
    'titular' => 'Alberto',
    'saldo' => 300
];

//echo $conta1['titular'];
//echo $conta3['titular'];


$contasCorrentes = [
    12345678910 => [
        'titular' => 'Vinicius',
        'saldo' => 1000
    ],
    12345678911 => [
        'titular' => 'Maria',
        'saldo' => 10000
    ],
    1234567812 => [
        'titular' => 'Alberto',
        'saldo' => 300
    ]
    ];


$contasCorrentes[999999999] = [
    'titular' => 'Claudia',
    'saldo' => 2000
];

$contasCorrentes[] = [
    'titular' => 'Claudia',
    'saldo' => 2000
];

$contasCorrentes[] = [
    'titular' => 'Claudia 2',
    'saldo' => 2002
];



//índice -> cpf e valor -> conta

foreach ($contasCorrentes as $cpf => $conta) {
    echo $conta['titular']. PHP_EOL;
    echo $cpf . " " . $conta['titular'] . PHP_EOL;

}







