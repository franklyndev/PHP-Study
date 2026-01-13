<?php

// Echo

echo "Hello\n", "World!\n", "= Echo";

/*
Echo is an in-built language in PHP, it can show multiple strings in a row, used 
to show simple texts, and doesn't return value
*/

echo "<br>";




// Print 

print("Hello World! = print()");
//print("Yo", "It's wrong"); // results an error. Cuz only a string is allowed

/*
It's a function in PHP, prints only a string in a row, returning a value, 
used in conditional expressions
*/



echo "<br>";



/*
var_dump: It’s a function that output variable’s details like value and type of a variable. ex:
*/
$age = 20;
var_dump($age);
// output = int(20)


echo "<br>";


$name = "Franklyn";
var_dump($name);
// output = string(8) "Franklyn"

echo "<br>";

// Print_r
/*
Shows a human-readable version of a variable
Great for arrays and objects
Does not show data types in detail
Output is cleaner, less verbose
*/

$a = ['PHP', 'JS', 'Python'];

print_r($a);