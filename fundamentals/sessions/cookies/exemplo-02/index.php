<?php 

    $theme = !empty($_COOKIE['theme']) ? $_COOKIE['theme'] : 'light';

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body {
            margin: 0;
            padding: 0;
        }
        .light{
            background-color: white;
            color: black;
        }
        .dark{
            background-color: black;
            color: white;
        }
        a{
            color: red;
        }
        
    </style>
</head>
<body class="<?= $theme ?>">
    
    <a href="theme_dark.php">Dark Mode</a> | <a href="theme_light.php">Light Mode</a>
    <h1>Page</h1>
    
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Animi dolorum incidunt nostrum, assumenda voluptatum dolores repellat corrupti hic optio iure ab accusantium quasi ipsam vero beatae minima sunt reprehenderit?</p>
    
</body>
</html>