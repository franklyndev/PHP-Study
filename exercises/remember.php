<?php

$data = [
    ["name" => "João", "daily" => 200, "days" => 3],
    ["name" => "Maria", "daily" => 150, "days" => 2],
    ["name" => "Carlos", "daily" => 300, "days" => 1],
];

$totalRevenue = 0;

foreach ($data as $key => $d) {
    $totalRevenue += $d["daily"] * $d["days"];   
}

