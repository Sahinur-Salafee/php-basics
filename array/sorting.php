<h2>Array Sorting</h2>

<?php

$numbers = [2,32,12,4,133,56,134,64,67,98,100,545];
sort($numbers);
var_dump($numbers);

foreach($numbers as $number) {
    echo $number . '<br>';
}

echo 'A sort';

asort($numbers);
var_dump($numbers);

echo 'Ar sort';

arsort($numbers);
var_dump($numbers);

$random = [
    'a' => 'Apple',
    'b' => 'Banana',
    'c' => 'cat',
    'd' => 'dog',
    'f' => 'frog',
    'l' => 'Lion',
    'z' => 'Zebra',
];

var_dump($random);
//sort($random);
ksort($random);
var_dump($random);