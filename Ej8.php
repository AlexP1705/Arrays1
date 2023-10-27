<!DOCTYPE html>
<html>
<head>
    <title>EJERCICIO8</title>
</head>
<body>

<?php
// Matriz original
$matriz = array(
    array(1, 5, 8, 5),
    array(7, 3, 2, 4),
    array(1, 6, 2, 4)
);

// Función para transponer la matriz
function transponerMatriz($matriz) {
    $filas = count($matriz);
    $columnas = count($matriz[0]);
    $matrizTranspuesta = array();

    for ($i = 0; $i < $columnas; $i++) {
        $nuevaFila = array();
        for ($j = 0; $j < $filas; $j++) {
            $nuevaFila[] = $matriz[$j][$i];
        }
        $matrizTranspuesta[] = $nuevaFila;
    }

    return $matrizTranspuesta;
}

// Obtener la matriz transpuesta
$matrizTranspuesta = transponerMatriz($matriz);

// Mostrar la matriz original
echo "Matriz original:\n";
foreach ($matriz as $fila) {
    echo "[" . implode(", ", $fila) . "]\n";
}

// Mostrar la matriz transpuesta
echo "Matriz transpuesta:\n";
foreach ($matrizTranspuesta as $fila) {
    echo "[" . implode(", ", $fila) . "]\n";
}
?>

</body>
</html>