<?php

/*
Create an array with mixed values:

[10, "20", 30, "abc", true, 5]


Tasks:

Loop through the array

Count only the numeric values

Print how many numeric values exist
*/

$mixed = [10, "20", 30, "abc", true, 5];
$counter = 0;
foreach ($mixed as $num){
    if(is_int($num) || is_float($num)) {
        $counter += 1;
    }
}
echo $counter;