<?php

/*
You have this array:

$prices = [100, 250, 80, 40];

Tasks:

Create a new array with a 10% discount applied to each price

Do not modify the original array

Print both arrays at the end

👉 Expected skills:

creating new arrays

loops

basic calculations
*/

$prices = [100, 250, 80, 40];

echo str_repeat("-", 12), "prices", str_repeat("-", 11) ,"\n";
foreach ($prices as $price) {
    echo($price . "\n");
}


$discounts = [];

echo str_repeat("-", 10), "discounts", str_repeat("-", 10),"\n";
foreach ($prices as $price) {
    $discount = $price * 10/100;
    $discounts[] = $price - $discount;
}

foreach ($discounts as $d) {
    echo($d . "\n");
}

