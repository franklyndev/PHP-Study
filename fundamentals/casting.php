<?php

// Casting

/*
Using cast u can convert a varible from one data type into another. 
*/

$number = 6;

$numConverted = (bool) $number;

var_dump($numConverted);

echo "<br>";

$string = "75";

$strConverted = (int) $string;

var_dump($strConverted);    