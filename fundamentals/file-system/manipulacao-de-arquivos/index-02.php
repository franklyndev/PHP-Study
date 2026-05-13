<?php

// COPIAR, MOVER, RENOMEAR E ELIMINAR ARQUIVOS

// Para mover um ficheiro (a cópia duplica), usamos a função rename
rename(__DIR__ . '/file-to-move.nfo', __DIR__ . '/destino/file-to-move.nfo');

// Esta função serve também para renomear o ficheiro, desde que seja mantida a path
rename(__DIR__ . '/file-to-move.nfo', __DIR__ . '/new-file-to-move.nfo');