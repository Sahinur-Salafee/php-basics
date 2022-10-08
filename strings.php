<?php

echo '<h2>Php Strings Functions</h2>';

$x = "My name is salafee";
echo $x;
echo '<br>';
echo 'string lenght: '.strlen($x);
echo '<br>';
echo 'Number of word: '. str_word_count($x);
echo '<br>';
echo 'strpos';
echo '<br>';
echo strpos($x, 'is');
echo '<br>';
echo 'String Replace';
echo '<br>';
echo str_replace('Sahinur', 'salafee', 'Hello Sahinur');