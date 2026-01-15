<?php

// for
echo "FOR\n------------\n";
$names = ['Franklyn', 'Marie', 'Joe'];

for ($i=0; $i < count($names); $i++){
    print_r($names[$i]);
    echo "\n";
}
echo "\n";
// while
echo "WHILE\n------------\n";

$i = 0;

while ($i < count($names)){
    echo $names[$i] . "\n";
    $i++;
}

echo "\n";
// do-while
echo "DO-WHILE\n------------\n";

$i = 0;

do{
    echo $names[$i] . "\n";
    $i++; 
}while ($i < count($names));
