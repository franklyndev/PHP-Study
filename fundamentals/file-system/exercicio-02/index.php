<?php 

/*
Guardar dentro de um arquivo de texto a tabuada do 3 até a multiplicacao por 1000.
3 x 1 = 3 .. 3 x 1000 = 3000
*/

file_put_contents('tabuada-do-3', '');

for ($i = 1; $i <= 1000; $i++) {
    $resultado = "3 x $i = " . ($i*3) . PHP_EOL;
    file_put_contents('tabuada-do-3', $resultado, FILE_APPEND);
}

echo 'terminado';

?>