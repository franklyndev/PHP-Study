<?php

$data = [
    ["hotel" => "A", "revenue" => 500],
    ["hotel" => "B", "revenue" => 300],
    ["hotel" => "A", "revenue" => 200],
    ["hotel" => "C", "revenue" => 400],
    ["hotel" => "B", "revenue" => 100],
];

$arr = [];

foreach ($data as $d) {
    // print_r($d)
    $hotel = $d['hotel']; // A.., B.., C..
    $revenue = $d['revenue']; // Corresponding revenue hotel
    
    if (!isset($arr[$hotel])) {
        $arr[$hotel] = $revenue;
    } else {
        $arr[$hotel] += $revenue;
    }
    
    // break;

}
print_r($arr);