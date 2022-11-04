<h2>Array Utility Function</h2>

<p>Walk Function , Map Function and Filter Function</p>

<p>Walk Function</p>

<?php

$number = [1,2,3,4,5,6,7,8,9];

function square($n) {
    printf("Square of %d is %d <br>", $n, $n*$n);
}

array_walk($number, 'square'); 


$random = [
    'a' => 'Apple',
    'b' => 'Ball',
    'c' => 'Cat',
    'd' => 'Dog',
    'e' => 'Elephant'
];
echo '<br>';
function random($value ,$key) {
    echo "$key for $value<br>";
}

array_walk($random, 'random');