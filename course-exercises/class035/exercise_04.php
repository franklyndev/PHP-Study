<?php

    $nome = 'Ana';

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 4</title>
</head>
<body>
    <?php if ($nome == 'Joao'):?>
    <p>Meu nome é Joao</p>
    <?php elseif ($nome == 'Ana'): ?>
    <p>Meu nome é Ana</p>
    <?php elseif ($nome == 'Carlos'): ?>
    <p>Meu nome é Carlos</p>
    <?php else: ?>
    <p>Nome desconhecido</p>
    <?php endif; ?>

</body>
</html>