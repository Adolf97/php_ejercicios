<?php

// Variables
$edad = 26;
$name = 'Adolfo';
$ingresos = 4000;
$color = 'amarillo';

// Ejercicios
if ($edad > 18) {
    echo '<br>';
    echo 'Eres mayor de edad, felicidades!!';
} else {
    echo '<br>';
    echo 'Chamaco miado';
}

if ($edad > 25) {
    if ($ingresos > 10000) {
        echo '<br>';
        echo 'Puedes pedir un crédito sin aval';
    } elseif ($ingresos >= 7000) {
        echo '<br>';
        echo 'Puedes pedir un crédito, pero necesitas 2 avales';
    } else {
        echo '<br>';
        echo 'No puedes pedir un crédito';
    }
} else {
    echo '<br>';
    echo 'No puedes solicitar un crédito';
}

switch ($color) {
    case 'azul':
        echo '<br>';
        echo 'Estás en el equipo ' .$color;
        break;
    case 'rojo':
        echo '<br>';
        echo 'Estás en el equipo ' .$color;
        break;
    case 'verde':
        echo '<br>';
        echo 'Estás en el equipo ' .$color;
        break;
    default:
        echo '<br>';
        echo 'No estás en ningún equipo';
        break;
}

?>