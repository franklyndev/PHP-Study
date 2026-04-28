<?php

// Callback Functions

/*
A callback function is indeed a function that you pass as an argument to another function (the receiving function). Inside this receiving function, you can invoke (call) the callback function at the appropriate moment. This design allows your main function to remain general and reusable, while the specific behavior can be customized externally by passing different callback functions.
*/


function doubling($n){
    return $n * 2;
}

function squaring($n){
    return $n ** 2;
}

function processArray($num, $double, $square){
    echo "Original Array = ";
    foreach ($num as $n){
        echo $n . " ";
    }

    echo "\nDoubled Array = ";
    foreach ($num as $n) {
        echo $double($n) . " ";
    }

    echo "\nSquared Array = ";
    foreach ($num as $n) {
        echo $square($n) . " ";
    }
}



$numbers = [1, 2, 3, 4, 5];

processArray($numbers, 'doubling', 'squaring');

/*
STUDY IMPROVEMENT
<?php

// Callback Functions

function doubling($n){
    return $n * 2;
}

function squaring($n){
    return $n ** 2;
}

function processArray($num, ...$callbacks){
    echo "Original Array = ";
    foreach ($num as $n){
        echo $n . " ";
    }

    foreach ($callbacks as $cb) {
        echo "\nResult = ";
        foreach ($num as $n) {
            echo $cb($n) . " ";
        }
    }
}

$numbers = [1, 2, 3, 4, 5];

processArray($numbers, 'doubling', 'squaring');

*/