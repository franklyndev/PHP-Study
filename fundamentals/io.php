<?php


$array = [1, 2, 3, 4];

foreach ($array as $arr) {
    echo $arr * 2, " ";
}
// ------------------------------------
$number = 5;

function double($num){
    return $num * 2;
}

echo double($number);
// ------------------------------------

print_r(array_map('double', $array));

// ------------------------------------

$result = array_map(function($arr){ # array map accepts a callback function as the first argument and an array as the second argument. The callback function is applied to each element of the array, and the result is returned as a new array.
    return $arr * 2;
}, $array);

print_r($result);

$result = array_map(fn($n) => $n * 2, $array); # Arrow Function 

print_r($result);