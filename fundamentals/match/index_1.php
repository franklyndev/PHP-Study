<?php 

// EXPRESSÃO MATCH

// Nova estrutura condicional que apareceu no PHP 8.
// Retorna um determinado valor de acordo com a análise efetuada

//----------------------------------------------------
$estado_encomenda = 'enviada';

switch ($estado_encomenda) {
    case 'em processamento':
    case 'em analise':
        # code...
        break;
    case 'anulada': // o Php vai avaliar caso $estado_encomenda seja algum desses valores, vao executar o mesmo bloco de codigo
    case 'cancelada':
    case 'invalida':    

        break;
    case 'enviada':

        break;
    default:
        # code...
        break;
}
//----------------------------------------------------

$resultado = match($estado_encomenda) {
    'em processamento' => 'A encomenda está a ser tratada',
    'anulada', 'cancelada' => 'A encomenda foi anulada ou cancelada',
    'enviada' => 'encomenda foi enviada.',
    default => 'Estado da encomenda é desconhecido.'
    
};

echo $resultado;
