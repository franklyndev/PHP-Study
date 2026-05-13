<?php
echo '<pre>';

/*
Uma das formas mais diretas de criar e escrever
informação num arquivo é recorrendo à função
file_put_contents()
*/

// Se o arquivo não existe, é criado.
// O conteúdo vai ser esmagado.
// vai excluir o conteudo atual e criar outro
file_put_contents('file1.txt', 'texto do arquivo 2');

// se pretendemos adicionar informação ao mesmo
// arquivo, usamos o terceiro argumento.
// o file_append vai acrescentar valores e nao substituir
file_put_contents('file2.txt', time() . PHP_EOL, FILE_APPEND);
echo 'terminado';