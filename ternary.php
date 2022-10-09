<?php 

$n = 13;

if(10 == $n ) {
    echo 'Ten';
} else if(12 == $n) {
    echo 'Twelve';
} else {
    echo 'A number';
}
?>
<br>
<?php
$numberInWord = (12 == $n) ? 'Twelve' : ((13 == $n) ? 'Thirteen' : ((10 == $n) ? 'Ten' : 'A number'));
echo $numberInWord;