<?php
echo '<pre>';

// Uma forma muito simples de obter o
// tamanho de um ficheiro em bytes
$dados = filesize('registros.txt'); // devolve valor em bytes
echo $dados . ' bytes';

echo '<hr>';

// E para obter várias informações sobre
// um determinado ficheiro.
$info = pathinfo('registros.txt');
print_r($info);