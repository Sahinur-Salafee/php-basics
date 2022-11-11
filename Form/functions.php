<?php

/**
 * @param mixed $value
 * return string
 */

function isChecked($value) {
    if( isset($_REQUEST['fruits']) && is_array($_REQUEST['fruits']) && in_array($value, $_REQUEST['fruits'])) {
        echo 'checked';
    } 
}