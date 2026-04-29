<?php

$names = ['primeiro' => 'jhon', 'ana', 'carl', 'phillipe'];
$age = ['15', '19', '21', '22'];
$dates = [
    '2026-04-29',
    '2026-04-30',
    '2026-05-01',
    '2026-05-02',
    '2026-05-03',
];

// is_array ($array) = verifica se a variavel é um array
$result = is_array($names); // true

// in_array ($valor, $array) = verifica se um valor está em um determinado array
$result = count($names);   // true

// array_keys($array) = retorna as chaves(indices) do array especificado
$result = array_keys($names);
// print_r($result);

// array_values($array) = retorna os valores do array especificado
$result = array_values($names);
// print_r($result);

// array_merge ($array1,$array2) = agrega os conteudos de dois arrays
$result = array_merge($names, $age);

// array_pop ($array) = remove a ultima posicao do array
$result = array_pop($names);

// array_shift($array) = remove a primeira posicao do array
$result = array_shift($names);

// array_unshift($array, "valor") = adiciona um ou mais elementos no inicio do array
$result = array_unshift($names, 'beginning');

// array_push($array, $valor, "valor") = adiciona um ou mais elementos no fim do array
$result = array_push($names, 'ending');

// array_combine($keys, $values) = mescla os dois arrays em chaves e valores.
$result = array_combine($names, $age);
// print_r($result);

// array_sum() = calcula a soma dos elementos do array 

// array_search = array_search e procura um valor dentro de um array e retorna o índice do valor se encontrar.
$result = array_search('ana', $names);

// explode("/","20/10/2009") = transforma uma string em um array
foreach ($dates as $d) {
    $result = explode('-', $d);
    print_r($result);
}

// implode ("separador", $array) = transforma um array em uma string
$result = implode(',', $dates);
print_r($result);

// array_slice(array, offset) = criar um novo array a partir de uma porçao de outro array
$people = ['Frankyn', 'Lucas', 'David', 'Tyler', 'Light'];
$people_part = array_slice($people, 2); // ['David', 'Tyler', 'Light]

// Functions for Arrays in PHP:
// https://www.php.net/manual/en/ref.array.php 

