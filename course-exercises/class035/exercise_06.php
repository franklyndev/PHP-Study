<?php 

    $erro = '';

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Execicio 6</title>
    <style>
        .sucesso {
            color: white;
            background-color: darkgreen;
            
        }
        .erro {
            color: white;
            background-color: darkred;
        }
    </style>
</head>
<body>
    <?php if (empty($erro)): ?>
        <p class="sucesso" >SUCESSO</p>
    <?php else: ?>
        <p class="erro">ERRO</p>
    <?php endif; ?>
</body>
</html>