<?php

// Arrays:
// Hay 2 formas de declarar un array, con la palabra reservada array y se abren paréntesis, o con corchetes
$dias = array('Lunes', 'Martes', 'Miércoles', 'Jueves', 'Viernes', 'Sábado', 'Domingo');
$meses = ['Enero', 'Febrero', 'Marzo', 'Abril', 'Mayo', 'Junio', 'Julio', 'Agosto', 'Septiembre'];

// Para mostrar arrays, hay 3 formas
// La primera es con var_dump
var_dump($dias);
echo '<br/>';
var_dump($meses);
echo '<br/>';

// La segunda es con un ciclo for
for($i = 0; $i < count($dias); $i++) {
    echo $dias[$i];
    echo '<br/>';
}

echo '<br/>';

?>

<?php
// La tercera es con foreach
foreach ($dias as $dia) {
    ?>
    <li><?php echo $dia; ?></li>
    <?php
}
?>

<?php

// Agregar elementos a un Array
$meses[9] = 'Octubre';
$meses[10] = 'Noviembre';
$meses[11] = 'Diciembre';
echo '<br/>';
var_dump($meses);

$personas = array(
    array (
        'nombre' => 'Adolfo',
        'apellido' => 'Ramírez'
    ),
    array (
        'nombre' => 'Ernesto',
        'apellido' => 'González'
    ),
    array (
        'nombre' => 'Carlos',
        'apellido' => 'López'
    ),
    array (
        'nombre' => 'Martín',
        'apellido' => 'Mistery'
    )
);

?>

<?php
// La tercera es con foreach
foreach ($personas as $persona) {
    ?>
    <li><?php echo $persona['nombre'] .' ' .$persona['apellido']; ?></li>
    <?php
}
?>