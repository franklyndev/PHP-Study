<?php

// functions

# Calculate AVERAGE
$numbers = [10, 20, 30, 40, 50];


function calculateAverage($numbers){
    $sum = 0;
    foreach ($numbers as $number) {
        $sum += $number;
    }
    return $sum / count($numbers); //output: 30
}

echo "Average: ",calculateAverage($numbers);

echo "\n";
# Max Number


function getMax($numbers){
    $max = 0;
    foreach ($numbers as $number) {
        if ($number > $max){
            $max = $number;
        }
    }

    return $max;
}

echo "Max: ",getMax($numbers); // output: 50

echo "\n";
# Counting Even Numbers

function countingEvenNumbers($numbers){
    $even = 0;
    foreach ($numbers as $number){
        if ($number % 2 == 0){
            $even += 1;
        }
    }
    return $even;
}

echo "Evens: ",countingEvenNumbers($numbers); // output: 5







