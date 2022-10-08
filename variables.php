<?php 

    include 'condition.php';

    $var1 = 'Variable in php';

?>

<h2><?php echo $var1; ?></h2>

<?php
$word = 'name1';
$name1 = 'sahinur';
$name2 = 'salafee';
echo $$word;
echo "\n";
echo "Hello {$name1} {$name2}";
echo "\n";

echo "john";
echo "\n";
echo "deo";

$age = 30;
var_dump($age);

// Printf function
$person = "Sahinur Salafee";
$fname = "Sahinur";
$lname = "Salafee";
printf("The person full name is: %s %s", $fname, $lname); // here %s is like a placeholder
echo "<br>";
$planet1 = "Mercury";
$planet2 = "Jupitar";
echo "The smallest planet is ".$planet1 ." and the biggest planet is ".$planet2 . "<br>";
echo "The smallest planet is {$planet1} and the biggest planet is {$planet2} <br>";
printf("The smallest planet is %s and the biggest planet is %s",  strtoupper($planet1), strtolower($planet2));
echo '<br>';

?>

<h2>Operator</h2>

<?php

// Oparetor
$n = 5;
$m = $n++;
echo $n, "<br>";
echo $m, "<br>";

/*
    $m = $n++;
    $m = $n;
    $n = $n + 1;
*/

$a = 7;
$b = ++$a;
echo $a, "<br>";
echo $b, "<br>";

/*
 $b = ++$a;
 $a = $a + 1;
 $b = $a;
*/



// Oparetor
$x = 5;
$y = $x--;
echo $x, "<br>";
echo $y, "<br>";

/*
    $y = $x--;
    $y = $x;
    $x = $x - 1;
*/

$a = 5;
$b = --$a;
echo $a, "<br>";
echo $b, "<br>";

/*
 $b = --$a;
 $a = $a - 1;
 $b = $a;
*/



// More About printf function
?>

<h2>More about Printf function:</h2>
<?php 

    $firstName = "Md";
    $middleName = "Sahinur";
    $lastName = "Salafee";

    printf('His name is %1$s %3$s %2$s', $firstName, $middleName, $lastName);
    echo '<br>';
    // 3.1416
    // print 3.14
    $n = 3.1416;
    printf('%.2f', $n);


?>

<h2>Sprintf function</h2>
<?php 
    $fname = 'Sahinur';
    $lname = 'Salafee';

    $output = sprintf('My name is %s %s', $fname,$lname); // sprintf return value 
    echo $output;
?>
