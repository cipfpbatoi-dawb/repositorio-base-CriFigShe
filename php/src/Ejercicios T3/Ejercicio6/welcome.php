<?php
session_start();

if(!isset($_SESSION['nom_usuari'])){
    header('Location: login.php');
    exit();
}

$nomUsuari = $_SESSION['nom_usuari'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>Benvingut, <?php $nomUsuari?>!</h2>
    <p>Inicia sesion en la seguent pagina</p>
    <a href="logout.php">Tancar session</a>
</body>
</html>