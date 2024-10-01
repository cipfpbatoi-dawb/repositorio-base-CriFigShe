<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio15</title>
</head>
<body>
    <h1>Ejercicio 15</h1>
    <?php
        echo "<p><b>Nom del servidor:</b> " . $_SERVER["SERVER_NAME"] . "</p>";
        echo "<p><b>Adreça IP del servidor:</b> " . $_SERVER["SERVER_ADDR"] . "</p>";
        echo "<p><b>Software del servidor:</b> " . $_SERVER["SERVER_SOFTWARE"] . "</p>";
        echo "<p><b>Agent d'usuari del client:</b> " . $_SERVER["HTTP_USER_AGENT"] . "</p>";
        echo "<p><b>Metode de la sol-licitud:</b> " . $_SERVER["REQUEST_METHOD"] . "</p>";
        echo "<p><b>URL de la sol-licitud:</b> " . $_SERVER["REQUEST_URI"] . "</p>";
        echo "<p><b>Referent:</b> " . (isset($_SERVER["HTTP_REFERER"]) ? $_SERVER["HTTP_REFERER"] : "No disponible") . "</p>";
        echo "<p><b>Protocol utilitzat:</b> " . $_SERVER["SERVER_PROTOCOL"] . "</p>";
        echo "<p><b>Port utilitzat:</b> " . $_SERVER["SERVER_PORT"] . "</p>";
    ?>
</body>
</html>