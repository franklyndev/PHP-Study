<?php

    
    // fazer a tabuada do 5
    $valor = 1
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio 1</title>
</head>
<body>
    <?php while ($valor <= 10):?>
        <p><?= '5 x ' . $valor . ' = '. 5 * $valor ?></p>
        <?php $valor++ ?>
    <?php endwhile;?>
</body>
</html>