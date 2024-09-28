<?php

/**
 * Indexed array
 * 
 */
$animal = array('Cat', 'Dog', 'Tiger', 'Lion');

echo count($animal);
echo '<br>';
echo $animal[2];

// Change value in array
$animal[2] = 'Elephant';
var_dump($animal);

// show the array item using loop

$arrlen = count($animal);
for ($i = 0; $i < $arrlen; $i++) {
    echo $animal[$i] . '<br>';
}
echo "<br>";

echo "<h2>Array Sorting.</h2>";
$cars = array("BMW", "Tesla", "Axio", "Allion");
$sortcar = sort($cars);
for ($i = 0; $i < count($cars); $i++) {
    echo $cars[$i] . '<br>';
}

$numbers = array(4, 6, 2, 22, 11);
$sortnum = sort($numbers);

for ($i = 0; $i < count($numbers); $i++) {
    echo $numbers[$i] . '<br>';
}


echo "<br>";
echo "<h2>Multidimensional Array.</h2>";
// Multidimensional array
