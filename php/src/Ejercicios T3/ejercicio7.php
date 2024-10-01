<?php
$color = isset($_COOKIE['color']) ? $_COOKIE['color'] : 'negre';

if($_SERVER['REQUEST_METHOD'] === 'POST'){
    $color = $_POST['color'];

    setcookie('color', $color, time() + 3600,'/');
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 7</title>
</head>
<body style="background-color: <?php echo $color;?>;">
    <h1>Ejercicio 7</h1>
    <h2>Preferencias de color</h2>    
        <form method="post" action="">
            <label for="color">Color preferit:</label>
            <select id="color" name="color">
                <option value="blau" <?php if ($color === 'blau') echo 'selected';?>>Blau</option>
                <option value="negre" <?php if ($color === 'negre') echo 'selected';?>>Negre</option>
                <option value="roig" <?php if ($color === 'roig') echo 'selected';?>>Roig</option>
                <option value="taronja" <?php if ($color === 'taronja') echo 'selected';?>>Taronja</option>
            </select>
            <button type="submit">Guardar</button>
        </form>
</body>
</html>