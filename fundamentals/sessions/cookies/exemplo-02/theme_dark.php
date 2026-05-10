<?php 
    
    $nome = 'theme';
    $valor = 'dark';
    $time = 3600;
    setcookie($nome, $valor, time() + $time);

    header('Location: index.php'); // essa funçao redireciona imediatamente para o File que vc setou
