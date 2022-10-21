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

// Recursive Function

