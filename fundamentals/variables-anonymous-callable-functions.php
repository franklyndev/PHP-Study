<?php

// # VARIABLE FUNCTION
// // PHP detects the parentheses next to a variable and it will look for a functions with the same name. 

function sum(int|float ...$numbers) : int|float{
    return array_sum($numbers);
}

$x = 'sum'; // receiving sum() function

echo $x(1, 2, 3, 4); // $x variable passing arguments as a function

// # ANONYMOUS FUNCTIONS  
// // Functions that has no name. you could pass anan functions as arguments

$one = 1; // you could also implement 'use' key-word in Anon Func, possibiliting accesses varibles out of the scope.
// // but when u do this ur literally copying the value in, not acessing the variable.
// // but passing the value as reference by using '&' u change the global value as well.


$sum = function (int|float ...$numbers) use($one) : int|float{ // Unamed function that assigns its purpose to a variable
    echo $one . "\n";
    return array_sum($numbers);
}; // needs semicolon (;) at the end

echo $sum(1, 9);

// # Callable Functions
// // When a function is passed to another function as an argument and then is called within that function for using it's called callback functions

$array = [1, 2, 3, 4];
//                     // anonymous function
$array2 = array_map(

    function($elements) { 

        return $elements * 2;
        
    }

, $array); // passing $array as arguments

print_r($array) . "\n";

print_r($array2);

# CALLABLE

$arrayer  = [1, 2, 3, 4];
// anon func/ closure
$multi = function(callable $callback, $arrayer): array{ // callables are used as parameters
    return array_map($callback, $arrayer); // $callback === times();
};


function times($value){ // normal function, it will be used as callback
    return $value * $value;
}

$result = $multi('times', $arrayer); // The result of returning must be stored in some variable, that is, $result.

print_r($result);


# ARROW FUNCTION

$arr = [5, 10];

$arr2 = array_map(fn($number) => $number * $number, $arr);

print_r($arr) . "\n";

print_r($arr2);
