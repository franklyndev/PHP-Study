<?php 

$nome = isset($_GET['nome']) ? $_GET['nome'] : null;
$idade = isset($_GET['idade']) ? $_GET['idade'] : null;


echo "ola sou $nome minha idade é $idade";