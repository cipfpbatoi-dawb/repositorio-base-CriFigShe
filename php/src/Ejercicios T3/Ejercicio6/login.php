<?php
session_start();

if($_SERVER['REQUEST_METHOD'] === 'POST'){
    $nomUsuari = $_POST['nom_usuari'];

    $_SESSION['nom_usuari'] = $nomUsuari;

    header('Location: welcome.php');
    exit();
}
else{
?>
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Ejercicio 6</title>
    </head>
    <body>
        <h1>Ejercicio 6</h1>
        <form method="post" action="login.php">
            <label for="nom_usuari">Nom d'usuari:</label>
            <input type="text" id="nom_usuari" name="nom_usuari" required>
            <button type="submit">Iniciar Sessió</button>
        </form>
    
    </body>
    </html>
<?php
}
?>
