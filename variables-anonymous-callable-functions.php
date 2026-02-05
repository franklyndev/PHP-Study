<?php

# VARIABLE FUNCTION
// PHP detects the parentheses next to a variable and it will look for a functions with the same name. 

function sum(int|float ...$numbers) : int|float{
    return array_sum($numbers);
}

$x = 'sum'; // receiving sum() function

echo $x(1, 2, 3, 4); // $x variable passing arguments as a function

# ANONYMOUS FUNCTIONS  
// Functions that has no name. you could pass anan functions as arguments

$one = 1; // you could also implement 'use' key-word in Anon Func, possibiliting accesses varibles out of the scope.
// but when u do this ur literally copying the value in, not acessing the variable.
// but passing the value as reference by using '&' u change the global value as well.

$sum = function (int|float ...$numbers) use($one) : int|float{ // Unamed function that assigns its purpose to a variable
    echo $one . "\n";
    return array_sum($numbers);
}; // needs semicolon (;) at the end

echo $sum(1, 9);

# Callable Functions
// When a function is passed to another function as an argument and then is called within that function it's called callback functions

$array = [1, 2, 3, 4];
                    // anon function
$array2 = array_map(function($elements) { 
    return $elements * 2;
}, $array); // passing $array as arguments

print_r($array) . "\n";

print_r($array2);





