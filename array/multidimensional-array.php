<?php

$number = [
    [1,2,3,4],
    [11,22,33,44],
    [111,222,333,444, [5,6,7]],
];

var_dump($number);

echo $number[0][2];
echo '<br>';
echo $number[2][4][2];
echo '<br>';

$student = array(
    'fname'   => 'Jamal',
    'lname'   => 'Ahmed',
    'age'     => '15',
    'section' => 'B',
    'Roll'    => 150
);

echo $student['lname'];
echo '<br>';
printf('%s %s', $student['fname'], $student['lname']);
echo '<br>';

// JSON convert
$jsondata = json_encode($student);
echo $jsondata;
echo '<br>';

$studentarr = json_decode($jsondata, true);
print_r($studentarr);