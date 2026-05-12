<?php

/* 
Em muitas circunstancias vais necessitar de um modo diferente de leitura dos dados. Ler uma linha de cada vez, por exemplo.
*/

$file = fopen('dados.txt', 'r');
while(!feof($file)){
    echo fgets($file) . '<br>';
}
fclose($file); // enquanto nao tiver chegado ao final do arquivo entao leia a linha por linha do $file

// ou
echo "<hr>";

$file = fopen('dados.txt', 'r');
while (($linha = fgets($file)) !== false) {
    echo $linha . '<br>';
}
fclose($file);