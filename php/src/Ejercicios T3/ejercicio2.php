<?php
session_start();

$_SESSION['usuari'] = 'Cristian';
$_SESSION['rol'] = 'Admin';

session_regenerate_id(true);

echo 'Benvingut, ' . $_SESSION['usuari'] . '<br>';
echo 'Rol: ' . $_SESSION['rol'] . '<br>';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 2</title>
</head>
<body>
    <h1>Ejercicio 2</h1>
</body>
</html>