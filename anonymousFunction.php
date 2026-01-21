<?php

// anonymous function

// It's a function that doesn't need name.
/*
$person = function(){  

};

var_dump($person()); // this is a function, and an Object of the type Closure
*/

$hello = function(){  // $hello - a variable that is like a function too
    echo "Hello!";
};

$world = function($he){ // $world will receive $hello function as argument 
    $he(); // $hello is like function, so use ();
};

$world($hello); // assigning $hello to $world