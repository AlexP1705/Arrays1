<!DOCTYPE html>
<html>
<head>
    <title>EJERCICIO5</title>
</head>
<body>

<?php
// Define un array con valores para contar repeticiones
$array = array(1, 2, 2, 3, 3, 3, 4, 4, 4, 4);

// Usa array_count_values para contar repeticiones
$repeticiones = array_count_values($array);

// Itera a través del array resultante
foreach ($repeticiones as $valor => $cantidad) {
    echo "El valor $valor aparece $cantidad veces." . PHP_EOL;
}
?>

</body>
</html>