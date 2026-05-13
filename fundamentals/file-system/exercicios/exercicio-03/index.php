<?php

echo '<pre>';

/*
Exercicio:
Este script deveria criar uma pasta de logs, escrever mensagens
num arquivo e mostrar informacoes sobre ele.

Mas ele contem erros de filesystem.
Corrija o codigo usando:
- __DIR__
- file_exists()
- mkdir()
- file_put_contents()
- FILE_APPEND
- scandir()
- is_file()
- filesize()
*/

$pasta = __DIR__ . '/logs';
$arquivo = $pasta . '/app.log';

// Problema 1: esta condicao esta errada.
// A pasta deve ser criada apenas quando ainda nao existe.
if (!file_exists($pasta)) {
    mkdir($pasta);
}

// Problema 2: este loop substitui o conteudo a cada volta.
// O correto e adicionar linhas novas ao final do arquivo.
for ($i = 1; $i <= 5; $i++) {
    file_put_contents($arquivo, "Linha $i criada em " . date('Y-m-d H:i:s') . PHP_EOL, FILE_APPEND);
}

echo "Arquivos encontrados:" . PHP_EOL;

// Problema 3: esta listagem pode gerar erro se a pasta nao existir.
// Tambem deve mostrar apenas arquivos, nao pastas.
$itens = scandir($pasta);

foreach ($itens as $item) {
    if(is_file($pasta . '/' . $item)) { 
        echo $item . PHP_EOL; // app log
    }
}

echo PHP_EOL;

// Problema 4: antes de mostrar o tamanho, confirme se o arquivo existe.
if(file_exists($arquivo)) {
    echo 'Tamanho do log: ' . filesize($arquivo) . ' bytes';
}