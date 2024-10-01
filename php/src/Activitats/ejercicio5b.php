<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio5b</title>
</head>
<body>
    <h1>Ejercicio 5b</h1>
    <?php
        $tabla = array();

        for ($i = 1; $i <= 5; $i++) {
            for ($j = 1; $j <= 5; $j++) {
                $tabla[$i][$j] = $i * $j;
            }
        }

        echo "<table border='1' cellpadding='5' cellspacing='0'>";
        echo "<tr><th>*</th>";

        for ($i = 1; $i <= 5; $i++) {
            echo "<th>$i</th>";
        }
        echo "</tr>";

        for ($i = 1; $i <= 5; $i++){
            echo "<tr>";
            echo "<th>$i</th>";
            for ($j = 1; $j <= 5; $j++) {
                echo "<td>" . $tabla[$i][$j] . "</td>";
            }
            echo "</tr>";
        }
        echo "</table>";
    ?>
</body>
</html>