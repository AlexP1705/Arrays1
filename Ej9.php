<!DOCTYPE html>
<html>
<head>
    <title>EJERCICIO9</title>
</head>
<body>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $diferencia = intval($_POST["diferencia"]);
    $datos = explode(',', $_POST["datos"]);

    $pares = array();
    foreach ($datos as $numero1) {
        foreach ($datos as $numero2) {
            if ($numero1 != $numero2 && abs($numero1 - $numero2) == $diferencia) {
                $pares[] = "($numero1, $numero2)";
            }
        }
    }

    if (!empty($pares)) {
        echo "Pares con una diferencia de $diferencia:<br>";
        echo implode(", ", $pares);
    } else {
        echo "No se encontraron pares con la diferencia de $diferencia.";
    }
}
?>
<form method="post" action="Ej9.php">
        <label for="diferencia">Diferencia deseada:</label>
        <input type="number" name="diferencia" required>
        <br>
        <label for="datos">Array de datos (separados por comas):</label>
        <input type="text" name="datos" required>
        <br>
        <input type="submit" value="Buscar Pares">

</body>
</html>