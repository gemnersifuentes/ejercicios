<?php

$n = 23; 

    if ($n <= 1) {
        echo "$n no es un número primo";
        return;
    }

    for ($i = 2; $i < $n; $i++) {
        if ($n % $i == 0) {
            echo "$n no es un número primo";
            return;
        }
    }

    echo "$n es un número primo";


?>

