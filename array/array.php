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
