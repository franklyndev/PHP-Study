<?php 
    // é possivel vc usar php quase tudo pra aplicar logica 

    $frase = "Esta frase vai aparecer com diferentes opacidades"
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio 5</title>
</head>
<body>
    <?php for ($i = 10; $i>=0; $i--) :?>
        <h3 style="opacity: <?= $i / 10?>"><?= $frase ?></h3> <!--manipulando CSS com comandos PHP inline-->
    <?php endfor; ?> 
</body>
</html>