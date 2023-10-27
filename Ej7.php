<!DOCTYPE html>
<html>
<head>
    <title>EJERCICIO7</title>
</head>
<body>

<?php
// Array de prueba
$array = array(2, 5, 7, 0, 4, 0, 7, -5, 8, 0);

// Separa los valores diferentes de 0 y los valores igual a 0
$no_ceros = array();
$ceros = array();

foreach ($array as $valor) {
    if ($valor === 0) {
        $ceros[] = $valor;
    } else {
        $no_ceros[] = $valor;
    }
}

// Combina los dos arrays preservando el orden
$resultado = array_merge($no_ceros, $ceros);

// Muestra el array resultante
echo "Array original: " . implode(", ", $array) . "\n";
echo "Array con los 0 al final: " . implode(", ", $resultado) . "\n";
?>

</body>
</html>