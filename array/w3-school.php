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

/**
 * Multidimensional Array
 * @param mixed $name, stock, sold
 * return void
 */

$car = array(
    array("BMW", 22, 18),
    array("Tesla", 30, 25),
    array("Allion", 40, 34),
    array("Land Rover", 30, 14),
);



echo $car[0][0] . " In stock " . $car[0][1] . " Sold " . $car[0][2] . '<br>';
$rows = count($car);
for ($row = 0; $row < $rows; $row++) {
    echo "<p><b>Row Number</b> $row</p>";
    echo "<ul>";
    $cols = count($car[$row]);
    for ($col = 0; $col < $cols; $col++) {
        echo "<li>" . $car[$row][$col] . "</li>";
    }
    echo "</ul>";
}
