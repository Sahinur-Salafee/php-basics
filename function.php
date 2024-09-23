<?php

// Recursion

// function PrintN($i){

//     if($i >=10){
//         return;
//     }
//     echo $i . '<br>';
//     $i++;
//     PrintN($i);
// }

// PrintN(0);

// Recursive Function

function PrintNumber($counter, $end, $steping)
{

    if ($counter > $end) {
        return;
    }

    echo $counter . '<br>';
    $counter += $steping;

    PrintNumber($counter, $end, $steping);
}

PrintNumber(20, 40, 2);


// Fibonacci Serise

// 0 1 1 2 3 5 8

function fibonacci($old, $new, $start, $end)
{

    if ($start > $end) {
        return;
    }

    $start++;
    echo $old . ',';

    $sum = $old + $new;
    $old = $new;
    $new = $sum;

    fibonacci($old, $new, $start, $end);
}

fibonacci(0, 1, 1, 20);
echo '<br>';
// function with argument
function printName($name, int $age, $address)
{
    echo 'Name:' . $name . '<br> Age: ' . $age . '<br> Address:' . $address;
}

printName('Rahim', 40, 'Dhaka');
echo '<br>';
function sumItems(float $a, float $b): float
{
    $c = $a + $b;
    return $c;
}
echo sumItems(10.5, 20.7);
echo '<br>';

// variable number of arguments
function sumNumbers(...$x)
{
    $n = 0;
    $len = count($x);
    for ($i = 0; $i < $len; $i++) {
        $n = $n + $x[$i];
    }

    return $n;
}

$result = sumNumbers(20, 34, 40, 60, 4, 6, 10);
echo $result;

echo '<br>';
// For string

function myFamily($lastname, ...$firstname) // only last argument is variadic
{
    $text = '';
    $len = count($firstname);
    for ($i = 0; $i < $len; $i++) {
        echo 'Hi ' . $firstname[$i] . ' ' . $lastname . '<br>';
    }
}

myFamily('Deo', 'john', 'jane', 'jack', 'lili');
