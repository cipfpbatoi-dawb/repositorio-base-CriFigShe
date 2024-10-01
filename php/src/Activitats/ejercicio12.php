<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio12</title>
</head>
<body>
    <h1>Ejercicio 12</h1>
    <form method="post">        
        <label for="nom">Nom:</label><br>
        <input type="text" id="nom" name="nom" required><br><br>
        <label for="edat">Edat:</label><br>
        <input type="text" id="edat" name="edat"required><br><br>
        <input type="submit" value="Enviar">
    </form>
    <?php
        if($_SERVER["REQUEST_METHOD"] == "POST"){
            $nom = htmlspecialchars($_POST['nom']);
            $edat = htmlspecialchars($_POST['edat']);
            echo "<h2>Benvingut, $nom</h2>";
            echo "<p>Tens $edat anys</p>";
        }else{
            echo "<p>Perfavor, complete el formulari</p>";
        }
    ?>
</body>
</html>