<?php

$data = [
    ["category" => "food", "price" => 50],
    ["category" => "tech", "price" => 200],
    ["category" => "food", "price" => 30],
    ["category" => "clothes", "price" => 100],
    ["category" => "tech", "price" => 150],
];

// Goal: count how many times each category appear
$arr = [];

foreach ($data as $d) {
    $category = $d["category"];
    
    if (!isset($arr[$category])) {
        $arr[$category] = 1;
        
    } else {
        $arr[$category] += 1;
        
    }
    

}
print_r($arr); // o array completo tem todos os 3 indices. $category sao indices apenas, indices associativos. porem no $arr eles estao vazios, depois é criado atraves de isset(). Lmebre, $data e $arr sao arrays diferentes.
