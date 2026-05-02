<?php 

    $erro = '';
    $css = '';
    $mensagem = '';
    if (!empty($erro)) {
        $css = 'erro';
        $mensagem = $erro;
    } else {
        $css = 'sucesso';
        $mensagem = 'sucesso';
    }

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
    <div class="<?= $css ?>"><?= $mensagem ?></div>
</body>
</html>