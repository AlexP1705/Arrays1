<!DOCTYPE html>
<html>
<head>
    <title>EJERCICIO4</title>
</head>
<body>

<?php
$paroimpar = [1, 2, 3, 4, 3, 3, 4, 1, 5];

// Inicializa un array bidimensional para almacenar los números pares en la fila 0 y los impares en la fila 1
$paridad = array(array(), array());

// Almacena los números en el array unidimensional y realiza la separación
foreach ($paroimpar as $elem) {
    if ($elem % 2 == 0) {
        $paridad[0][] = $elem; // Números pares en la fila 0
    } else {
        $paridad[1][] = $elem; // Números impares en la fila 1
    }
}

// Muestra el array bidimensional
echo "Array bidimensional con números pares en la fila 0 y números impares en la fila 1:<br>";
var_dump($paridad);
?>

</body>
</html>