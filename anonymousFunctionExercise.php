<?php

// #1
/*
$num = function($n){
    echo $n * 2;
};

$num(5);
*/
// #2
$discount = 0.15; // it catches the value inside, so in the function when u use "use(keyword)" it always be 0.15 bc value's copied.

$product = function($price) use ($discount){
    $finalDiscount = $price * $discount;
    $finalPrice = $price - $finalDiscount;
    echo "Discount: $finalDiscount \nTotal: $finalPrice";
};

$product(50);

// #3

