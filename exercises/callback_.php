<?php

function applyRule($price, $discount10, $tax){

    echo "Discount: ", discount10($price) . "\n";

    echo "Tax: ", tax($price) . "\n";

}

function discount10($price){
    $discount = $price * 0.10;
    return $price - $discount;
}

function tax($price){
    return $price + 5;
}

applyRule(100, 'discount10', 'tax');
