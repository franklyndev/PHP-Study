<?php

$number1 = 70;
$number2 = 50;
$isAdmin = false;

$result = $number1 > $number2 && $isAdmin;

// Ternary Operator
//echo ($result) ? "It's truth" : "It's not truth";

// Normal If-Else statement
if ($result){
    echo "It's truth!";
} else {
    echo "It's not truth!";
}