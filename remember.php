<?php

$data = [
    ["category" => "food", "price" => 50],
    ["category" => "tech", "price" => 200],
    ["category" => "food", "price" => 30],
    ["category" => "clothes", "price" => 100],
    ["category" => "tech", "price" => 150],
];

$arr = [];
$sum = 0;
$price = 0;

foreach ($data as $key => $d) {
    $category = $d['category'];
    $price = $d['price'];

    if (!isset($d['category'])) {
        $arr[$category] += $price;
    } else {
        
        $arr[$category] += $price;
        
    }
   
    
}


print_r($arr);



