<?php

$contador = 1;

// Condição mais dinâmica com limites menos claros priorizar o uso do while.
// Duas formas diferentes de executar a mesma coisa.

while ($contador < 20) {
    echo "#$contador" . PHP_EOL;
    $contador = $contador + 1;
}

//$contador = $contador + 2;


for ($contador = 1; $contador <=15; $contador++) {
    if ($contador == 13) {
        break;
    }
    echo $contador . PHP_EOL;
}

for ($contador = 1; $contador <=15; $contador++) {
    if ($contador == 13) {
        continue;
    }
    echo $contador . PHP_EOL;
}
