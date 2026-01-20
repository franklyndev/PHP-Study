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

// foreach
echo "\n";
echo "FOREACH\n------------\n";

foreach ($names as $key => $name) {
    echo $key . " => $name \n";
}


// Continue
echo "\n";
echo "CONTINUE\n------------\n";

for ($i = 0; $i < count($names); $i++){
    if ($i === 1){
        continue;
    }
    echo $names[$i], "\n";
}

// Break
echo "\n";
echo "BREAK\n------------\n";

for ($i = 0; $i < count($names); $i++){
    if ($i === 1){
        break;
    }
    echo $names[$i], "\n";
}
