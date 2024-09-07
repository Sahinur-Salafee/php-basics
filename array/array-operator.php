<?php

$class1 = ['1' => 'Rahim', '2' => 'Karim'];
$class2 = ['3' => 'Rashid', '4' => 'Kamal'];

print_r($class1 + $class2);
var_dump($class1 == $class2);
var_dump($class1 != $class2);
var_dump($class1 !== $class2);