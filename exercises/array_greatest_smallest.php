<?php

// Write a program to find the greatest and the smallest element of the given array

$bigger = 0;

$arr = [] ;


for ($i = 0; $i < 4; $i++) {
    $a = readline('enter numbers: ');
    array_push($arr, $a);
}



foreach ($arr as $numbers) {
    if ($numbers > $bigger) {
        $bigger = $numbers;
    }   
}

echo "Greatest: " . $bigger . "\n";

echo "Smallest: " . min($arr);

