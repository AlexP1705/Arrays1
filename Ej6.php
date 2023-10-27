<!DOCTYPE html>
<html>
<head>
    <title>EJERCICIO6</title>
</head>
<body>

<?php
// Crear un array con 10 notas
$notas = array(90, 85, 78, 92, 88, 94, 76, 85, 70, 89);

// Eliminar la nota más baja y la más alta
if (count($notas) >= 3) {
    // Primero, ordena el array de menor a mayor
    sort($notas);

    // Luego, elimina el primer y el último elemento
    array_shift($notas);
    array_pop($notas);

    // Calcular la media de las notas restantes
    $media = array_sum($notas) / count($notas);

    // Comprobar que los datos sean numéricos
    $notas_numericas = array_filter($notas, 'is_numeric');
    
    if (count($notas_numericas) == count($notas)) {
        echo "Notas restantes: " . implode(", ", $notas) . "\n";
        echo "Media de las notas restantes: " . $media . "\n";
    } else {
        echo "Algunas notas no son numéricas.";
    }
} else {
    echo "No hay suficientes notas para calcular la media.";
}
?>

</body>
</html>