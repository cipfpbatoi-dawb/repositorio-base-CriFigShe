<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio4b</title>
</head>

<body>
    <h1>Ejercicio 4b</h1>
    <?php
    function comptarVocals($cadena)
    {       
        $contador = 0;

        for ($i = 0; $i < strlen($cadena); $i++) {
           match (strtolower($cadena[$i])){
            "a", "e", "i", "o", "u" => $contador++,
            default => null,
           };
        }
        return $contador;
    }
    $cadena = "Buenos diAas";
    $vocals = comptarVocals("$cadena");    
    echo "La cadena tiene " . $vocals . " vocales";
    ?>
</body>

</html>