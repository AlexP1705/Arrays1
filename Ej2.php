<!DOCTYPE html>
<html>
<head>
    <title>EJERCICIO2</title>
</head>
<body>
    
<?php
// Crear un array con algunos valores que contienen duplicados
$mi_array = array(1, 2, 2, 3, 4, 4, 5, 5, 5);

// Encontrar elementos duplicados
$duplicados = array();
$longitud = count($mi_array);

for ($i = 0; $i < $longitud - 1; $i++) {
    for ($j = $i + 1; $j < $longitud; $j++) {
        if ($mi_array[$i] == $mi_array[$j]) {
            // Agregar el elemento duplicado al array de duplicados
            $duplicados[] = $mi_array[$i];
        }
    }
}

// Mostrar los elementos duplicados
if (!empty($duplicados)) {
    echo "Elementos Duplicados: " . implode(', ', array_unique($duplicados));
} else {
    echo "No se encontraron elementos duplicados.";
}
?>

</body>
</html>