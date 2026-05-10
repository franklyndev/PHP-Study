<?php 
    $nome = 'theme';
    setcookie($nome, 'light', time() + 3600);

    header('Location: index.php');
