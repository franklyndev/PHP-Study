<?php

// Default Functions

function greet($name = "guest"){ // instancing with a default value
    echo "Welcome, $name!";  // even I don't pass none value the function assign a default value
}

$name = "Franklyn";

echo greet($name);