<?php


    $lojas = [
        // key
        'lisboa' => 'lisboa@gmail.com',
        'porto' => 'porto@gmail.com',
        'coimbra' => 'coimbra@gmail.com'
    ];

    $cidade = 'bonfim';

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio 5</title>
</head>
<body>
    
    <?php if(key_exists($cidade, $lojas)): ?> 
        <h3><?= $cidade ?></h3>
        <p><?= $lojas[$cidade]?></p>
    <?php else: ?>
        <p>Nao existe nenhuma loja na cidade indicada.</p>
    <?php endif;?>
</body>
</html>