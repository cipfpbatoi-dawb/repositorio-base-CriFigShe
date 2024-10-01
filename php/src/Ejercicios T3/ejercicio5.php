<?php
    if(isset($_COOKIE['nom_usuari'])){
        $nomUsuari = $_COOKIE['nom_usuari'];
        echo 'Hola ' . $nomUsuari;

        $salutacio = 'Hola ' . $nomUsuari;
        setcookie('nom_usuari', $salutacio, time() + 3600, '/');
    }else{
        echo 'Cookie not found';
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 4</title>
</head>
<body>
    <h1>Ejercicio 4</h1>
</body>
</html>