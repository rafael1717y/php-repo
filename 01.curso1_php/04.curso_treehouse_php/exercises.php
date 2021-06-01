<?php

// store each exercise in a string variable
$exercise1 = 'Display "Hello World';
$exercise2 = "Convert Pounds to Kilograms";
$exercise3 = "Convert Kilograms to Pounds";

// create a variable containing the day of the week
$day = date('N');
var_dump($day);

//use an if statemenet to test the day of the week

if ($day == 1) {
    echo $exercise1;
} elseif ($day == 2) {
    echo $exercise2;
} elseif ($day == 3) {
    echo $exercise3;
}

$today = date("F d, Y");
echo $today;








?>