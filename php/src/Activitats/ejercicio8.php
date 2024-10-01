<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio8</title>
</head>
<body>
    <h1>Ejercicio 8</h1>
    <?php
    function afegir_element($array, $element) {
        $array[] = $element;
        return $array;
    }
    $animals = array("gat", "gos");
    $animals = afegir_element($animals, "conill");
    foreach ($animals as $animal) {
        echo $animal . "<br>";
    }
?>
</body>
</html>