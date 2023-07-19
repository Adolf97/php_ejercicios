<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    // Tipos de datos
    // En PHP debemos colocar el símbolo $ para designar una variable

    $num1 = 10;
    $num2 = 20;
    $resSuma = $num1 + $num2;
    $resResta = $num1 - $num2;

    echo '<br>';
    echo $resSuma;
    echo '<br>';
    echo $resResta;

    echo '<br>';
    $concat = 'El resultado de la suma es: ' .$resSuma;
    echo '<h1>' .$concat .'</h1>'; // Para concatenar, debemos usar un . (punto) antes de lo que queramos concatenar

    // Para constantes, se usa la palabra reservada define
    define('nombre', 'Adolfo');
    define('PI', '3.14');

    echo '<br>';
    echo nombre;

    echo '<br>';
    $radio = 5;
    $areaCirculo = PI * ($radio * $radio);
    echo $areaCirculo;
    ?>
</body>
</html>