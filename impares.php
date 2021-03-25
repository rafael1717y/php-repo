<?php


for  ($num = 0; $num <= 100; $num++) {
    if (($num % 2) != 0){
        echo $num .PHP_EOL;
    };
}

$tab = 9;

for ($num = 0; $num <=10; $num++) {
    $tabuada = $num * $tab;

    echo "$tabuada x $num = $tabuada" .PHP_EOL;
}
