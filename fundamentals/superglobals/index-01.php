<?php

// SUPER GLOBALS
/*
Sao variaveis em forma de arrays que estao sempre disponiveis durante a execucao do codigo e as quais podemos aceder e manipular em qualquer escopo de aplicacao.
*/

$nome = "joao";

apresentar ();

echo $nome . "<br>";
echo $apelido;

function apresentar(){
    global $nome; // Primeiramente $nome que foi criado fora do escopo da funcao, nao seria reconhecido dentro do mesmo sem o uso da palavra reservada 'global'.
    echo "Eu sou " . $nome . '<br>';

    // ou

    echo $GLOBALS['nome'] .  '<br>';

    // podemos alterar o valor da variavel global
    $GLOBALS['nome'] = 'Frank'; 
    $GLOBALS['apelido'] = 'Santos';
}