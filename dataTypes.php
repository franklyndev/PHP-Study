<?php

// String
    // echo gettype('This is a string');
// Numbers - integers, float(double)
    // echo gettype(12);
// Booleans
    // echo gettype(true);
// Arrays
    // echo gettype(['Yo', 2]);
// Object
     
    class Costumer{ // class

        public $name; // attribute

        public function Costumer($name){ // construct
            $this->name = $name;
        }

    }
    $person = new Costumer(); // object
var_dump($person); // printing
    
// Null
    // $iAm = Null;
    // echo gettype($iAm);