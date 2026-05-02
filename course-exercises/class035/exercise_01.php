<?php 
    /*

        Usando como ponto de partida o array de produtos apresenta no HTML uma Unordered List (ul) contendo todos os produtos do array

    */
    
        $products = ['rice', 'potato', 'orange'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>excercise 01</title>
</head>
<body>
    
    <ul>
        <li> <?= $products[0]; ?>
        <li> <?= $products[1]; ?>
        <li> <?= $products[2]; ?>
    </ul>

</body>
</html>