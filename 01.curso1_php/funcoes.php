<?php

echo "Arquivo de funções aqui.";


function exibeOlaMundo() {
    echo 'Olá mundo';
}



function adicionar2($x) {
    return $x + 2;
}


function exibeMensagem($mensagem) {
    echo $mensagem . PHP_EOL;
}


function sacar(array $conta, float $valorASacar):array
{
    if ($valorASacar > $conta['saldo']) {
        exibeMensagem("Você não pode sacar!");
    } else {
        $conta['saldo'] -= $valorASacar;
    }
    return $conta;
}


function depositar(array $conta, float $valorADepositar):array
{
    if ($valorADepositar > 0) {
        $conta['saldo'] += $valorADepositar;
    } else {
        exibeMensagem("Depósitos precisam ser positivos.");
    }    

    return $conta;
}

// Sem o & passagem por cópia. Com & passagem por referência.
function titularComLetrasMaiusculas(array &$conta)
{
    $conta['titular'] = strtoupper($conta['titular']);
}
