<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio13</title>
</head>
<body>
    <h1>Ejercicio 13</h1>
    <?php
        if($_SERVER["REQUEST_METHOD"] == "POST"){
            $email = htmlspecialchars($_POST['email']);
            $missatge = htmlspecialchars($_POST['missatge']);

            if(filter_var($email, FILTER_VALIDATE_EMAIL)){
                echo "<h2>Gracias por contactarnos</h2>";
                echo "<p>El teu email es: $email</p>";
                echo "<p>El teu missatge es: $missatge</p>";
            }else{
                echo "<p>Dirrecio de correu no valida. Perfavor posa una direccion valida</p>";
            }
        }else{
            ?>
            <h2>Formulari</h2>
            <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
                <label for="email">Email:</label><br>
                <input type="email" id="email" name="email" required><br><br>
                <label for="missatge">Missatge:</label><br>
                <textarea id="missatge" name="missatge" rows="4" cols="50" required></textarea><br><br>                
                <input type="submit" value="Enviar">
            </form>
            <?php
        }

    ?>
</body>
</html>