<h2>Array Searching</h2>

<?php 
$numbers = [2,32,12,4,133,56,134,64,67,98,100,545];

if(in_array(67, $numbers)) {
    echo '67 found <br>';
} else {
    echo 'Not found';
}

$offset = array_search(133,$numbers);
echo $offset;

echo '<br>';


$random = [
    'a' => 'Apple',
    'b' => 'Banana',
    'c' => 'cat',
    'd' => 'dog',
    'f' => 'frog',
    'l' => 'Lion',
    'z' => 'Zebra',
];

if(key_exists('f',$random)) {
    echo 'f exists';
}