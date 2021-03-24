<?php

$idade = 16;
$nome = 'Vinicius';
$numeroDePessoas = 2;

echo "Você só pode entrar se tiver a partir de 18 anos ou";
echo "a partir de 16 anos acompanhado". PHP_EOL;

//tbm or >=  <= == and else if ou elseif
//Para verificação de uma só instrução não é necessário {}

if ($idade >= 18)
    echo "Você tem $idade anos. Pode entrar sozinho.";
else if ($idade >= 16 && $numeroDePessoas > 1)
    echo "Você tem $idade anos, está acompanhado(a), então pode entrar.";
else
    echo "Você não pode entrar.";


echo PHP_EOL;
echo "Adeus";


