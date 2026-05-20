<?php

// A SUPER GLOBAL $_GET

/*
Com muita frequência vês na barra de endereços do teu browser algo parecido com:

https://www.lojaonline.com/index.php?id=1&prd=25

O endereço web que vês acima tem uma url:
https://www.lojaonline.com/index.php

Seguida de um sinal de interrogação que dá início à query string,
que é o conjunto de parâmetros que vamos poder captar dentro do nosso script.

Cada parâmetro está definido por um nome e um valor.
No caso da URL acima, temos um id=1

Logo depois aparece um & que permite separar parâmetros de uma query string.
Como conseguimos chegar a estes parâmetros.

Vamos ver a super global $_GET. É um array onde são automaticamente colocados
os parâmetros de uma query string.
*/

// vamos usar o endereco:
// http://localhost/PHP-Study/fundamentals/superglobals/get/index-01.php

if(!empty($_GET)){
    echo 'Existem parametros na query string';
} else {
    echo 'Nao existem parametros na query string';
}