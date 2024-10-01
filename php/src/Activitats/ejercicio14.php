<?php
        $nom = "Cristian";
        $email = "cris@gmail.com";
        $edat = "";
        
        $validacio = match (true){
            empty($nom) => "El camp nom es obligatori",
            !filter_var($email, FILTER_VALIDATE_EMAIL) => "El correu electronic no es valid",
            empty($edat) => "El camp edat es obligatori",
            default => "Formulari valid",
        };
        
    ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio14</title>
</head>
<body>
    <h1>Ejercicio 14</h1>
    <form method="post">
        <label for="nom">Nom:</label><br>
        <input type="text" id="nom" name="nom" required><br><br>
        <label for="edat">Edat:</label><br>
        <input type="text" id="edat" name="edat" required><br><br>
        <label for="email">Email:</label><br>        
        <input type="email" id="email" name="email" required><br><br>
        <input type="submit" value="Enviar">
        <p><?= $validacio ?></p>
    </form>    
</body>
</html>