<?php

// SCOPE

/*
É possível aceder dentro de uma função a uma variável global.
Fazemos da seguinte forma:
*/

$nome = 'joao';

function dados(){
    global $nome; // se nao usarmos a palavra reservada global, a variavel $nome nao sera reconhecida no escopo da funcao.
    $nome = 'joaquim';
}

dados();

echo $nome;

// IMPORTANTE: A melhor estratégia passa por usar parâmetros nas funções.