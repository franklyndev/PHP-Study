<?php

// Switch-Statement

$name = "Franklyn"; 

switch ($name) { # put the wanted variable
    case 'Franklyn': # and case its value was what u want, so execute the code below.
        echo "It's Franklyn!";
        break;
    
    default:
        echo "Nobody!"; # if none of the cases was true, so execute a default value...
        break;
}