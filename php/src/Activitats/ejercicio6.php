<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio6</title>
</head>
<body>
    <h1>Ejercicio6</h1>
    <?php
    $frutas = ["poma", "platan", "maduixa"];

    echo $frutas[0];

    $frutas[] = "taronja";

    foreach($frutas as $fruta){
        echo "$fruta <br />\n";
    }
    ?>
</body>
</html>