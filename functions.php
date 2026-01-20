<?php

// functions

function connection(){
    $pdo = new PDO('mysql:host=localhost;dbname=books', 'root', '');
    return $pdo;
}


function getData(){
    $conn = connection();
    $query = $conn->query('select * from users');
    $query->execute();
    return $query->fetchAll();
}