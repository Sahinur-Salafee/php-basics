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


