<?php

// &&(and), ||(or), !

$isOlder = false;
$canAcess = true;

$result1 =  $canAcess && $isOlder;
$result2 =  $canAcess || $isOlder;
$result3 =  $canAcess || $isOlder;
var_dump($result1); // false
echo "<br>";
var_dump($result2); // true
echo "<br>";
var_dump(!$result3); // false