<?php 

/*
CSV(Comma Separeted Values) é um arquivo com estrutura particular que permite ser usado 
entre aplicacoes para transporte de dados. Excel, LibreOffice, Google Sheets, ...
 */

// Criar arquivo CSV
$file = fopen('dados.csv', 'w');

$header = ['Coluna A', 'Coluna B', 'Coluna C'];
fputcsv($file, $header);

// Linhas
for ($i = 1; $i <= 100; $i++){
    $linha = [rand(100, 999), rand(100, 999), rand(100, 999)];
    fputcsv($file, $linha);
}

fclose($file);