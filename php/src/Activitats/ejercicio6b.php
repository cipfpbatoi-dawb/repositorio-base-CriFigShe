<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio6b</title>
</head>
<body>
    <h1>Ejercicio 6b</h1>
    <?php
        $nota = 0;

        $calificacio = match (true){            
            $nota == 10 => "Excel-lent",
            $nota >= 8 && $nota <= 9 => "Molt be",
            $nota <= 7 && $nota >=5 => "Be",
            default => "Insuficient",
        };

        echo $calificacio;
    ?>
</body>
</html>