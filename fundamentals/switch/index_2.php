<?php

// EXPRESSÃO CONDICIONAL SWITCH

// podemos agrupar varios valores em analise para
// execucao do mesmo bloco de codigo

$estado_encomenda = 'em processamento';

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