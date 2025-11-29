<?php
    $age = 12;

    if ($age <= 12) {
        echo "access denied";
        echo "<br>";
    }
    else{
        echo "aceess granted";
        echo "<br>";
    }

    switch ($age) {
        case $age<=12:
            echo "access denied";
            echo "<br>";
            break;
        
        default:
            echo "access granted";
            echo "<br>";
            break;
    }
?>