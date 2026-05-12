<?php 

/*
Existem varias formas de leitura de dados a partir de um arquivo de texto. para guardar dados dentro de um arquivo usamos file_put_contents(). 

Agora para Ler o conteudo de um arquivo usamos file_get_contents().
*/
for ($i=1; $i <= 20; $i++) { 
    file_put_contents('dados.txt', "registro $i <br>", FILE_APPEND);
}

$dados = file_get_contents('dados.txt');

echo nl2br($dados);

echo "<hr>";

// podermos ler apenas uma parte do arquivo
$dados = file_get_contents('dados.txt', offset: 6, length: 40);

echo nl2br($dados);