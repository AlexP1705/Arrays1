<!DOCTYPE html>
<html>
<head>
    <title>EJERCICIO10</title>
</head>
<body>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $datos = explode(',', $_POST["datos"]);

    function encontrarDivision($array) {
        $total = array_sum($array);
        $mitad = $total / 2;

        $parte1 = array();
        $parte2 = $array;

        $sumaParte1 = 0;

        foreach ($array as $valor) {
            if ($sumaParte1 + $valor <= $mitad) {
                $parte1[] = $valor;
                $sumaParte1 += $valor;
                $key = array_search($valor, $parte2);
                unset($parte2[$key]);
            }
        }

        if ($sumaParte1 == $mitad) {
            echo "Array dividido en dos partes con la misma suma:\n";
            echo "[" . implode(", ", $parte1) . "] = $sumaParte1\n";
            echo "[" . implode(", ", $parte2) . "] = " . (array_sum($parte2)) . "\n";
        } else {
            echo "No se encontró una división con la misma suma.\n";
        }
    }

    encontrarDivision($datos);
}
?>

 <form method="post" action="index.php">
        <label for="datos">Array de datos (separados por comas):</label>
        <input type="text" name="datos" required>
        <br>
        <input type="submit" value="Dividir Array">
    </form>
</body>
</html>