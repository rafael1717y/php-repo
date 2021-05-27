<?php

require 'funcoes.php';


$contasCorrentes = [
     '112.345.678.11' => [
        'titular' => 'Maria',
        'saldo' => 10000
    ],
    '123.456.781-22' => [
        'titular' => 'Alberto',
        'saldo' => 300
    ], 
    '123.456.789-33' => [
        'titular' => 'vinicius',
        'saldo' => 1000
    ]
];


$contasCorrentes['123.456.789-33'] = sacar($contasCorrentes['123.456.789-33'], 500);
echo $contasCorrentes['123.456.789-33']['saldo'];


$contasCorrentes['123.456.789-33'] = depositar($contasCorrentes['123.456.789-33'], 99900);
echo $contasCorrentes['123.456.789-33']['saldo'];


titularComLetrasMaiusculas($contasCorrentes['123.456.789-33']);


foreach ($contasCorrentes as $cpf => $conta) {
    list('titular' => $titular, 'saldo' => $saldo) = $conta;
    
    exibeMensagem(
        //"$cpf $conta[titular] $conta[saldo]"
        "cpf {$conta['titular']} {$conta['saldo']}"
        //"cpf $titular $saldo"
    );
       
}

//Remoção de um item
unset($contasCorrentes['123.456.789-33']);


exibeOlaMundo();

