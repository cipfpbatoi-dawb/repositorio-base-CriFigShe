<?php
    if (isset($_POST['submit'])) {       
        $nom = trim($_POST['nom']);
        $email = trim($_POST['email']);
        $contrasenya = $_POST['contrasenya'];
        $confirmar_contrasenya = $_POST['confirmar_contrasenya'];
            
        $error_message = '';
        $success_message = '';
            
        if (empty($nom) || empty($email) || empty($contrasenya) || empty($confirmar_contrasenya)) {
            $error_message = "Tots els camps són obligatoris.";
        }        
        elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $error_message = "El correu electrònic no és vàlid.";
        }        
        elseif ($contrasenya !== $confirmar_contrasenya) {
            $error_message = "Les contrasenyes no coincideixen.";
        }        
        elseif (!preg_match('/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d).{8,}$/', $contrasenya)) {
            $error_message = "La contrasenya ha de tenir almenys 8 caràcters, incloent almenys 1 lletra majúscula, 1 lletra minúscula i 1 número.";
        } else {            
            $success_message = "L'usuari s'ha registrat correctament!";
        }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio7b</title>
</head>
<body>
    <h1>Ejercicio 7b</h1>
        <form method="post">
            <label for="nom">Nom:</label><br>
            <input type="text" id="nom" name="nom" required><br><br>

            <label for="edat">Contrasenya:</label><br>
            <input type="contrasenya" id="contrasenya" name="contrasenya" required><br><br>

            <label for="confirmar_contrasenya">Confirma la Contrasenya:</label><br>
            <input type="contrasenya" id="confirmar_contrasenya" name="confirmar_contrasenya" required><br><br>

            <label for="email">Email:</label><br>        
            <input type="email" id="email" name="email" required><br><br>

            <input type="submit" value="Enviar">
        </form>
</body>
</html>