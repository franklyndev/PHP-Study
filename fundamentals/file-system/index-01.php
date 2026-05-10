<?php

echo '<pre>';

// listagem de ficheiros
echo __DIR__ . '<br>'; // DIR = Directory
$files = scandir(__DIR__); // constante mágica __DIR__
print_r($files); // scandir = it does scan the DIR

/*
O . e o .. estão sempre presentes em cada pasta.
São identificados como a pasta atual (.) e a pasta anterior (..)
*/

echo '<hr>';
$files2 = scandir('./'); // lista a pasta atual
print_r($files2);

echo '<hr>';
$files3 = scandir('../'); // lista a pasta anterior
print_r($files3);

// ------------------------------------------
// Podemos questionar se cada elemento encontrado é um ficheiro ou uma pasta
echo '<hr>';

foreach($files as $item) {
    echo is_file($item) ? 'Arquivo' : 'Pasta';
    echo "<br>";
}

echo '<hr>';

foreach($files as $item) {
    if(is_file($item)){
        echo $item . "<br>";
    }
    
}