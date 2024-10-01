<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio11</title>
</head>
<body>
    <h1>jercicio 11</h1>
    <?php
    $a = 10;
    $b = 5;
    $operacio = '+';
    
    $resultat = match ($operacio) {
        '+' => $a + $b,
        '-' => $a - $b,
        '*' => $a * $b,
        '/' => $a / $b,
        default => 'Operació desconeguda',
    };
    
    echo "El resultat de $a $operacio $b és $resultat."; 
    ?>
</body>
</html>