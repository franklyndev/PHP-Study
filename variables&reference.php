<?php

$name = 'Franklyn';

$myName = &$name; # when u put a "&" before $, ur making reference of $name. So if name change after, $myName will as well.

$name = 'Joe';

echo $name, "<br>";
echo $myName;