<?php

// Función básica
function saludar() {
    echo 'Saludos desde una función';
}

saludar();
echo '<br>';

// Funciones con parámetros
function calculadora($n1, $n2, $op) {
    if ($op == '+') {
        $res = $n1 + $n2;
        echo 'El resultado es: ' .$res;
    }
    if ($op == '-') {
        $res = $n1 - $n2;
        echo 'El resultado es: ' .$res;
    }
    if ($op == '/') {
        $res = $n1 / $n2;
        echo 'El resultado es: ' .$res;
    }
    if ($op == '*') {
        $res = $n1 * $n2;
        echo 'El resultado es: ' .$res;
    }
}

calculadora(5, 6, '*');
echo '<br>';
calculadora(5, 6, '+');
echo '<br>';
calculadora(5, 6, '-');
echo '<br>';
calculadora(5, 6, '/');
echo '<br>';

// Funciones con parámetros por defecto
function saludar2($saludo, $despedida = 'ciao') {
    return $saludo .' y ' .$despedida;
}

echo saludar2('Hola');

echo '<br>';

// Funciones anónimas
$saludarAnonimo = function() {
    echo 'saludos desde una función anónima';
};

echo $saludarAnonimo();

?>