<?php

// EXPRESSÃO MATCH

$valor = 100;

// Nenhum valor está sendo avaliado dentro do match() igual é num Switch, mas ele irá entrar dentro da estrutura pois está como TRUE,
// assim, consigo analisar e fazer várias condicoes direcionando-as a seus retornos queridos

$resultado = match(true) { // assim conseguimos inves de fazer verios if's e else's basta usar Match
    $valor > 100 => fn1(),
    $valor == 100 => fn2(),
    $valor < 100 => fn3()
};

echo $resultado;

function fn1() {
    return 'Valor maior que 100.';
}

function fn2() {
    return 'Valor igual a 100.';
}

function fn3() {
    return 'Valor menor que 100.';
}