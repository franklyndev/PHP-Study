<?php
// arrays

$data = [
        'Franklyn',
        'Joe',
        'Marie',  
        true, 
        34
        ]; // normal array

/*
if u want determine specifics index, u can do it,
putting some value as index(anything) + =>, ex:  
*/

$otherData = [
            'informations' => ['tel' => '(74)9 9103-0000', 'adress' => 'Avenue 223'],
             'name'=> 'Marie', 
             2=> true, 
             1=> 34
             ]; // different array

// And even it's possible to create an array inside another one. It called multidimensional array

print_r($otherData['name']);
echo "<br>";
// output...
print_r($data);
echo "<br>";

print_r($otherData);

echo "<br>";

//Manipulating...

// adding at the final

$data[] = 'last';
# OR
array_push($data, 'real last');


// adding at the beginning

array_unshift($data, 'Initial');

//-------------------------------

//Printing...
print_r($data); // use to print the array or specifics values also.
# OR
echo "<br>";
echo $data[1]; // use echo if u want display a specific value, putting its index.
