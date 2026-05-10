<?php
    $nome = 'meu_cookie';
    setcookie('meu_cookie', '', time() - 3600);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <?php require_once('nav.php') ?>  

    <h2><strong>Remover Cookie</strong></h2>
    <hr>
    <h3>Cookie removido com sucesso</h3>

</body>
</html>