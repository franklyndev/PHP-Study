<?php
// arrays

$data = [1=>'Franklyn',3=>'Joe',2=>'Marie', 5=> true, 6=> 34];

echo $data[1];

// adding at the final
$data[] = ['Yo'] ;


// adding at the beginning
// array_unshift($data, 'Initial');

print_r($data);