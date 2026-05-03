<?php

/*
Dada a coleção de nomes, apresenta toda a coleção excepto o nome cujo índice = 4 (maria)
*/

$nomes = ['joao', 'ana', 'carlos', 'marco', 'maria', 'silvia', 'helena', 'ricardo'];

$css = '';


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .vermelho {
            color: red;
        }
    </style>
</head>
<body>
    <div><?php foreach ($nomes as $key => $n) : ?></div>
       <div class=<?= $key >= 4 ? 'vermelho' : '' ?>><?= $n ?></div>
    <?php endforeach; ?>
</body>
</html>