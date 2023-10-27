<!DOCTYPE html>
<html>
<head>
    <title>EJERCICIO1</title>
</head>
<body>
    
<?php
// Crear un array con algunos valores
$mi_array = array(1, 2, 3, 4, 5);

// Obtener la longitud del array
$longitud = count($mi_array);

// Iterar a través del array en orden inverso e imprimir los valores
for ($i = $longitud - 1; $i >= 0; $i--) {
    echo $mi_array[$i] . "\n";
}
?>

</body>
</html>