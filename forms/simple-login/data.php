<?php

if(isset($_POST['username']) && isset($_POST["password"])){
    
    $user = $_POST['username'];
    $password = $_POST['password'];

    if ($user == "franklyn" && $password == "123"){
        echo "SUCESS";
    } else {
        echo "invalid credentials";
    }   

} else {
    echo "Form not sent";
}

 

?>