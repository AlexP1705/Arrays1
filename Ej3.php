<!DOCTYPE html>
<html>
<head>
    <title>EJERCICIO3</title>
</head>
<body>
    
<?php
// Crear un array con algunos valores
$mi_array = array(1, 2, 3, 4, 5, 6, 7, 8, 9, 10);

// Inicializar dos arrays para pares e impares
$pares = array();
$impares = array();

// Recorrer el array original
foreach ($mi_array as $valor) {
    if ($valor % 2 == 0) {
        // Es un número par, agregarlo al array de pares
        $pares[] = $valor;
    } else {
        // Es un número impar, agregarlo al array de impares
        $impares[] = $valor;
    }
}

// Mostrar los valores en los arrays de pares e impares
echo "Números Pares: " . implode(', ', $pares) . "<br>";
echo "Números Impares: " . implode(', ', $impares);
?>

</body>
</html>