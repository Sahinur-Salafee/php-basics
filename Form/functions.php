<?php

/**
 * Check Fruits Functions
 * @param mixed $value
 * return string
 */

function isChecked($value) {
    if( isset($_REQUEST['fruits']) && is_array($_REQUEST['fruits']) && in_array($value, $_REQUEST['fruits'])) {
        echo 'checked';
    } 
}


/**
 * Add Animals Function
 * @param mixed $option
 * 
 */

 function displayAnimals($options) {
    foreach($options as $animal) {
        printf("<option value='%s'>%s</option>", strtolower($animal), ucwords($animal));
    }
 }
