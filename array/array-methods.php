<?php


//The array_change_key_case() function changes all keys in an array to lowercase or uppercase.

$age = array(
    'Peter' => 20,
    'Ben' => 30,
    'Jeo' => 40
);

print_r(array_change_key_case($age, CASE_UPPER));
echo '<br>';
print_r(array_change_key_case($age, CASE_LOWER));
echo '<br>';

//If two or more keys will be equal after running array_change_key_case() 
// (e.g. "b" and "B"), the latest array will override the other.
$pets = array("a" => "Cat", "B" => "Dog", "c" => "Horse", "b" => "Bird");
print_r(array_change_key_case($pets, CASE_UPPER));
echo '<br>';

// PHP array_chunk() Function

$cars = array("Volvo", "BMW", "Toyota", "Honda", "Mercedes", "Opel");
print_r(array_chunk($cars, 3));
