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

function PrintNumber($counter, $end, $steping) {
    
    if($counter > $end) {
        return;
    }

    echo $counter. '<br>';
    $counter += $steping;

    PrintNumber($counter, $end, $steping);
}

PrintNumber(20, 40, 2);


// Fibonacci Serise

// 0 1 1 2 3 5 8

function fibonacci($old, $new, $start, $end) {
    
    if($start > $end) {
        return;
    }

    $start++;
    echo $old. ',';

    $sum = $old + $new;
    $old = $new;
    $new = $sum;

    fibonacci($old, $new, $start, $end);
}

fibonacci(0,1,1,20);

