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
