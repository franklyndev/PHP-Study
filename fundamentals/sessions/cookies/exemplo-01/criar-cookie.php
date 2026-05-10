<?php 

    $nome = 'meu_cookie';
    $valor = 'conteudo-do-meu-cookie';
    $expiracao = 3600; // 1 hora de duração
    setcookie($nome, $valor, time() + $expiracao);

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

    <h2><strong>Criar Cookie</strong></h2>
    <hr>
    <h3>Cookie criado com sucesso</h3>

</body>
</html>