<?php
    $str = "This is a STRING";
    echo $str;
    $strUpper = strtoupper($str);
    $strLower = strtolower($str);
    echo "<br>";
    echo $strLower; 
    echo "<br>";
    echo $strUpper;
    echo "<br>";
    echo str_word_count($str);

?>