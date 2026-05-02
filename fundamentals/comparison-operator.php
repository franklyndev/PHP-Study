<?php

$a = 10;
$b = 5;
$c = "10";

// PHP uses Short-circuit system, that means..
// PHP stops checking a logical expression as soon as the final result is already known.
// $result = true || false; -> php verify the first element, and if the logical expression is correct and is already known it skips straight



/*
==  Equal to
Checks if the values are equal.
It does NOT care about the data type.
*/
if ($a == $c) {
    echo "\$a == \$c : true\n"; // true because 10 == "10"
}

/*
=== Identical
Checks if the value AND the type are the same.
*/
if ($a === $c) {
    echo "\$a === \$c : true\n";
} else {
    echo "\$a === \$c : false\n"; // false because int != string
}

/*
!=  Not equal to
Checks if values are different.
Ignores type.
*/
if ($a != $b) {
    echo "\$a != \$b : true\n"; // true because 10 != 5
}

/*
!== Not identical
Checks if value OR type is different.
*/
if ($a !== $c) {
    echo "\$a !== \$c : true\n"; // true because types are different
}

/*
> Greater than
Checks if left value is bigger than right value.
*/
if ($a > $b) {
    echo "\$a > \$b : true\n"; // true because 10 > 5
}

/*
< Less than
Checks if left value is smaller than right value.
*/
if ($b < $a) {
    echo "\$b < \$a : true\n"; // true because 5 < 10
}

/*
>= Greater than or equal to
Checks if left value is greater OR equal.
*/
if ($a >= 10) {
    echo "\$a >= 10 : true\n"; // true
}

/*
<= Less than or equal to
Checks if left value is smaller OR equal.
*/
if ($b <= 5) {
    echo "\$b <= 5 : true\n"; // true
}

/*
<=> Spaceship operator
Returns:
-1 if left is smaller
 0 if both are equal
 1 if left is greater
*/
echo $a <=> $b; // returns 1
echo "\n";
echo $b <=> $a; // returns -1
echo "\n";
echo $a <=> 10; // returns 0
echo "\n";
echo "\n";

// ----------------------------------------------------------------
// Conditional Operators:   ??      ?:

// Ternary Operator
$value = 'jhon';

echo $value == 'jhon' ? 'yes' : 'no';


// null coalescing operator - operador de coalescencia nulo
$value = null;

$a = $value ?? 'OK';    // $a = 'OK'

$value = 10;

$a = $value ?? 'OK';   // $a = '10'