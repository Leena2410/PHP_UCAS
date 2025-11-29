<?php
    $fruits = ["Apple", "Banana", "Cherry"];
    echo $fruits[0] . '<br>';
    $fruits[3] = 'Peach';
    echo '<pre>';
    var_dump($fruits);
    echo '</pre>';

    echo "<br><br><br><br>";

    $mixedArray = [15, "Apple", true];
    echo '<pre>';
    var_dump($mixedArray);
    echo '</pre>';

    echo "<br><br><br><br>";

    $user = [
    'name' => 'Zura',
    'age' => 32,
    'hobbies' => ['Coding', 'Tennis']
    ];

    echo $user['name'] . '<br>';
    echo '<pre>';
    var_dump($user);
    echo '</pre>';

    foreach ($user as $key => $value) {
        if (is_array($value)){
            $temp = $value;
            foreach ($value as $subkey => $subvalue) {
                echo "$subkey -> $subvalue <br>";
            }
        }
        else {
                echo "$key -> $value <br>";    
        }
        
    }
?>