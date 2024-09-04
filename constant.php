<?php

define("Greeting","Hello in php world");
echo Greeting;
echo "<br>";

define("Skills",[
    "php",
    "javascript",
    "dot net"
]);

echo Skills[1];
echo "<br>";

define("DB",[
    "server"=>"localhost", 
    "username"=>"root",
    "password"=>"",
    "database"=>"php_practice"
]);

foreach(DB as $key=>$value) {
    echo $key . ":" . $value . "<br>";
}

echo "Biodata <br> ";

define("MyBio", [
    "name" => "Salafee",
    "age" => "28",
    "profession" => "web developer"
]);

foreach(MyBio as $key => $value) {
    echo $key . ":" . $value . "<br>";
}

const myCar = 'Tesla';

// constant global scope

function data() {
    echo MyBio['name'] . '<br>';
    echo myCar;
}

data();

