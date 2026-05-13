<?php 

// COPIAR, MOVER, RENOMEAR E ELIMINAR ARQUIVOS

// Para copiar um arquivo
copy(__DIR__ . "/origem/file1.nfo", __DIR__ . '/destino/file1.nfo');

// Na copia podemos alterar o nome do arquivo de destino
copy(__DIR__ . "/origem/file1.nfo", __DIR__ . '/destino/new-file.nfo');

// IMPORTANTE: Se o arquivo de destino existir, vai ser eliminado