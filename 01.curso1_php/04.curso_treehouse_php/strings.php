<?php

//Single quotes
$name = 'Alena';

// Double quotes para mostrar o valor de uma variável
$string_one = "Hello $name!";

// \ Interpretará o próximo caractere como $
$string_one = "Hello \$name!";

echo $string_one;

$string_one = "Learning to display \"Hello $name!\" to the screen.\n";
$string_one = 'Learning to display "Hello ' .$name. '!" to the screen'."\n";
echo $string_one;

$string_one = 'Learning to display';
$string_one .= '"Hello "';
$string_one .= $name;
$string_one .= '!" to the screen.';
$string_one = 'I am ' . $string_one . "\n";
echo $string_one;


$firstName = "Rasmus";
$lastName = "Lerdorf";
$fullName = $firstName . " " .$lastName;
echo $fullName;

echo "$fullName was the original creater of PHP. \n";

$isReady = true;
var_dump($isReady);

$isReady = false;

var_dump($isReady);


var_dump(1 + "2");


$a = 10;
$b  = '10';

var_dump($a == $b);
var_dump($a === $b);


$string_one = "";
if ($string_one == 'Learning to display "Hello Alena! to the screen.')
{
    echo 'the values match';
} elseif ($string_one == "") {
    echo '$string_one is empty';
} else {
    echo 'the values DOT NOT match';
}

?>