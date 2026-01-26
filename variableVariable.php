<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Variable Variable</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <p>It's a dynamic way to name varibales</p>

    <?php 
        // Variable Variable

        $destination = "city";
        
        $$destination = "Aracaju";

        echo $city;

    ?>
</body>
</html>