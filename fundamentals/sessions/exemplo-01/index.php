<?php 

// todos os scripts devem ter o inicio de sessao, 
// antes de qualquer output no PHP
session_name('minha_sessao'); // cria o nome da sua sessao
session_set_cookie_params(60*3); // define o tempo que seu cookie ficará ativo. ATENCAO: o tempo sempre é contado em "segundos"
// é necessário replicar esses comandos em todos os sessions_starts que tem ons outros arquivos tbm
session_start();

// o valor de $nome e $sobrenome vai ser definido tendo
// em atencao a existencia ou nao das variaveis na super global $_SESSION
$nome = $_SESSION['nome'] ?? '-';
$sobrenome = $_SESSION['sobrenome'] ?? '-';

// $_SESSION - contem uma colecao, trata-se de um array de todas as veriaveis que estao na sessao

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <?php require_once 'nav.php'?>

    <hr>
    <h2>Exercicio com sessoes de php</h2>

    <h3>Valor da variavel 'nome'</h3>
    <h1><?= $nome ?></strong></h1>

    <h3>Valor da variavel 'sobrenome':</h3>
    <h1><?= $sobrenome ?></h1>


</body>
</html>