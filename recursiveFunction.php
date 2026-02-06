<?php

# Recursive Function

// A recursive function in PHP is a function that calls itself to solve a problem, breaking it down into smaller, similar sub-problems until it reaches a base case.

function countsUp($number){
    if ($number <= 5) {
        echo $number . " ";
        countsUp($number + 1);
    } else {
        echo "\nBASE CASE REACHED\n";
    }
}

$num = 1;
countsUp($num);


function sums($number){
    if ($number <= 15) {
        echo $number . "\n";
        sums($number + 1);
    } 
}

$number = 11;

sums($number);