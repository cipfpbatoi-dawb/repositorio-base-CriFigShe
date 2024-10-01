<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio3b</title>
</head>
<body>
    <h1>Ejercicio 3b</h1>
    <?php
        $nums = ["14", "28", "32", "44", "59"];
        function obtindreMitjana($nums) {
            $suma = 0;
            for ($i = 0; $i < count($nums); $i++){
                $suma += $nums[$i];
            }
            $mitjana = $suma / count($nums);
            return $mitjana;
        }

        echo "La mitjana es: " . obtindreMitjana($nums);
    ?>
</body>
</html>