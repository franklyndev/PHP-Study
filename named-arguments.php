<?php
// named arguments

function createUser(
    string $name,
    int $age,
    string $email,
    bool $isAdmin = false
) {
    echo "User created";
}

createUser(name: 'Franklyn', age: 19, email: 'frank@gmail.com', isAdmin: true);

/*
named arguments is a way to make your code clean and readable. Instead of specify parameters only for their position in the function call, you call by their names. This way, parameters won't be just numbers with no reason, naming them you know for what that number is for   
*/