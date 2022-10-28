<h2>Array</h2>
<?php

// Associative Array

$students = [
    '1' => 'Rakib',
    '2' => 'Sakib',
    '3' => 'Jakir',
    '4' => 'Shagor',
];

echo $students['1']. '<br>';

$foods = [
    'fruits' => 'Orange, Banana, Mango',
    'drinks' => 'Water, Milk, Juice',
    'vegetable' => 'Potato, Brookly',
];

foreach($foods as $key=>$value) {
    echo $key . '=' . $value . '<br>';
}

// String to Array
$vegetable = explode(', ','potato, carrot, brinjel,brokly, sweet-potato');
var_dump($vegetable);
echo $vegetable[1] . '<br>';
echo count($vegetable);
echo '<br>';

// Array to String
$vegetableString = join(', ', $vegetable);
echo $vegetableString;

$car = ['marcidis', 'ferari', 'tesla','toyota'];
var_dump($car);

$carString = join(', ', $car);
echo 'Car String: ' . $carString;
echo '<br>';

$carArr = explode(', ', $carString);
var_dump($carArr);
echo $carArr[1];
echo '<br>';
echo count($carArr);

?>

<h2>Array Slice</h2>

<?php 

$friuts = [
    'mango',
    'orange',
    'banana',
    'jackfruit',
    'apple',
    'plum',
    'dates'
];

var_dump($friuts);

$someFruits = array_slice($friuts, 2,5);
var_dump($someFruits);
?>
<br>
<h2>Array Splice</h2>
<?php
// for nagative value
//            -5    -4      -3      -2    -1
$animals = ['cow','goat','hourse','cat','dog'];
$addanimals = ['camel','tiger','lion'];
$newanimals = array_splice($animals, -5,4, $addanimals);
var_dump($newanimals);
var_dump($animals);



