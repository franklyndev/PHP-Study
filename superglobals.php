<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Superglobals</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php

/*
    $GLOBALS
    $_SERVER
    $_REQUEST
    $_POST
    $_GET
    $_FILES
    $_ENV
    $_COOKIE
    $_SESSION
*/

?>
<h1>Superglobals</h1>
<hr>
<h2>$GLOBALS</h2>
<p>$GLOBALS is a superglobal array that contains all global variables</p>
<?php 
// example

$x = 10; // both are global $x an $y
$y = 15;

function sum(){
    // echo $x + y$ === WRONG!!, bc they're local variables
    echo $GLOBALS['x'] + $GLOBALS['y']; // calling for the global ones
}

sum();

?>
<hr>
<h2>$_SERVER</h2>
<p>It provides information about the server and the request being handled.</p>
<?php

echo $_SERVER['PHP_SELF'] . "<br>";

echo $_SERVER['SERVER_NAME'] . "<br>";

echo $_SERVER['DOCUMENT_ROOT'] . "<br>";

?>

</body>
</html>