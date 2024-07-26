
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tablas de Multiplicar</title>
    <style>
        table {
            border-collapse: collapse;
            width: 50%;
            margin: 20px auto;
        }
        table, th, td {
            border: 1px solid black;
        }
        th, td {
            padding: 10px;
            text-align: center;
        }
        th {
            background-color: #f2f2f2;
        }
    </style>
</head>
<body>
    <h1>Tablas de Multiplicar</h1>
    <?php
    // Definir el rango de las tablas
    $inicio = 1;
    $fin = 10;

    // Iterar sobre cada número para generar la tabla
    for ($i = $inicio; $i <= $fin; $i++) {
        echo "<h2>Tabla del $i</h2>";
        echo "<table>";
        echo "<tr><th>$i</th><th>x</th><th>Resultado</th></tr>";
        
        // Calcular y mostrar los resultados de la tabla
        for ($j = $inicio; $j <= $fin; $j++) {
            $resultado = $i * $j;
            echo "<tr><td>$i</td><td>x $j</td><td>$resultado</td></tr>";
        }
        
        echo "</table>";
    }
    ?>
</body>
</html>
