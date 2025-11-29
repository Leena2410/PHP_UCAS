<?php
    // one line comment 
    
    /* 
    mmulti line comment
    */

    $name = "Leena";
    $age = 22; 

    echo "My name is $name, I'm $age years old!";
    echo "<br>";
    echo "My name is ". $name .", I'm " . $age . " years old!";
    echo "<br>";
    echo gettype($name) . " " . gettype($age);
?>