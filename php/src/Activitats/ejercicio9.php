<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio9</title>
</head>
<body>
    <h1>Ejercicio 9</h1>
    <?php
    $nota = 10;

    $resultat = match (true){
        $nota === 10 => 'Excel-lent',
        $nota <= 9 && $nota >= 8 => 'Molt be',
        $nota <=7 && $nota >= 5 => 'Be',
        default => 'Insuficient',
    };

    echo $resultat;
    ?>
</body>
</html>