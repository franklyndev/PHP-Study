<?php

// PARAMETROS DE UMA FUNCAO

// como forçar os strict types?
declare(strict_types=1);

function multiplicar($a, $b): string {
    return $a * $b;
}
// dessa forma o PHP proibe esse retorno indevido
echo multiplicar(10, 2);