<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio2b</title>
</head>
<body>
    <h1>Ejercicio 2b</h1>
    <?php
        echo "FOR:<br>";
        for($i = 0; $i <= 20; $i+=2){
            echo "$i<br>";
        }
        echo "<br><br>";

        echo "WHILE:<br>";
        $j = 0;
        while($j <= 20){
            echo "$j<br>";
            $j+=2;
        }
    ?>
</body>
</html>