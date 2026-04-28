<?php

// SCOPE

$name = "Franklyn Santos";

function displayName(){
    global $name;
    echo $name;
}
displayName($name);