<?php

// normal variables

$firstName = 'Franklyn';

$firstName = 'Joe';

echo $firstName . "<br>";

// constants variables

# u can use a function to create const variables.
# funtion name: define('CONST_NAME', 'value'). (runtime)

define('STATUS_PAID', 'paid');

echo STATUS_PAID . "<br>";

# or using the keyword 'const'. (compile time)


const STATUS_PAY = 'pay';


echo STATUS_PAY;

$cons = get_defined_constant

