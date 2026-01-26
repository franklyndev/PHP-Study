<?php

/*
Create an array with 5 numbers.

Tasks:

Print all numbers using a foreach

Calculate the sum of all elements

Calculate the average

👉 Expected skills:

indexed arrays

foreach

basic math
*/


$numbers = [10, 20, 30, 40, 50];

$sum = 0;

foreach ($numbers as $numb) {
    echo $numb . "\n";
    $sum += $numb;
}

$average = $sum / count($numbers);

echo "Sum: " . $sum . "\n";
echo "Average: " . $average;