<?php

$arr = [1, 2, 3, 4, 5];

function applyOperation(array $arr, callable $callback): array
{
    $result = [];

    foreach ($arr as $n) {
        $result[] = $callback($n);
    }

    return $result;
}


$double = applyOperation($arr, function ($n) { // anonymous function here's passed as a callback
    return $n * 2;  // $n would be each element of the array in each iteration
});


$addFive = applyOperation($arr, function ($n) {
    return $n + 5;
});


$toString = applyOperation($arr, function ($n) {
    return "Value: $n";
});

print_r($double);
print_r($addFive);
print_r($toString);