<?php

// STRINGS
// ------------------------------------------------------

// There're a several string functions on PHP to use in string operations

$phrase = 'Lorem ipsum, dolor sit amet consectetur adipisicing elit.';

// Show number of characters of a string
echo strlen($phrase) . '<br>';

// Transfornm all letters into UpperCase
echo strtoupper($phrase) . '<br>';

// Show only part of the phrase
echo substr($phrase, 0, 21) . '<br>';

// Verify if a word exists inside the string
echo str_contains($phrase, 'consectetur') . '<br>';

/*
There're a lot of others functions for strings
*/

