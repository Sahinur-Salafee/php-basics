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
