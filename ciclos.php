<?php

// Variables
$a = 0;
$num = 10;

// Ejercicios
// for ($i = 0; $i <= 20; $i++) {
//     echo 'El valor de i es: ' .$i .'<br>';
// }

// while ($a <= 20) {
//     echo 'El valor de a es: ' .$a .'<br>';
//     $a++;
// }

if ($num > 20 and $num < 40) {
    while ($num > 15) {
        echo 'El valor del número es: ' .$num .'<br>';
        $num--;
    }
} elseif ($num > 40) {
    while ($num > 30) {
        echo 'El valor del número es: ' .$num .'<br>';
        $num--;
    }
} else {
    while ($num >= 1) {
        echo 'El valor del número es: ' .$num .'<br>';
        $num--;
    }
}

?>