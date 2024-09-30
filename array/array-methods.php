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

echo '<br>';

// PHP array_column() Function
/**
 * The array_column() function returns the values from a single column in the input array.
 */

$a = array(
    array(
        'id' => 5698,
        'first_name' => 'Peter',
        'last_name' => 'Griffin',
    ),
    array(
        'id' => 4767,
        'first_name' => 'Ben',
        'last_name' => 'Smith',
    ),
    array(
        'id' => 3809,
        'first_name' => 'Joe',
        'last_name' => 'Doe',
    )
);

var_dump(array_column($a, 'last_name'));
var_dump(array_column($a, 'first_name'));
var_dump(array_column($a, 'first_name', 'id'));

echo '<br>';

//PHP array_combine() Function
$fname = array("Peter", "Ben", "Joe");
$age = array("35", "37", "43");

$c = array_combine($fname, $age);
var_dump($c);
