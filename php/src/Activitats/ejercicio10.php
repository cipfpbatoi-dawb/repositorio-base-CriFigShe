<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio10</title>
</head>
<body>
    <h1>Ejercicio 10</h1>
    <?php
    $producte = 'llet';

    $preu = match($producte){
        'pa' => 1.00,
        'llet' => 0.80,
        'formatge' => 2.50,
        default => 0.00,
    };

    echo $preu;
    ?>
</body>
</html>