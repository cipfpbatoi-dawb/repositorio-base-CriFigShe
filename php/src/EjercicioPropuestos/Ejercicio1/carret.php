<?php
session_start();

if(isset($_SESSION['carret']) || empty($_SESSION['carret'])){
    echo '<p>El carret esta buit</p>';
    echo '<a href="ejercicio1.php">Afegir productes</a>';
    exit();
}

$carret = $_SESSION['carret'];

if(isset($_GET['eliminar'])){
    $producteAEliminar = $_GET['eliminar'];
    if(isset($carret[$producteAEliminar])){
        unset($carret[$producteAEliminar]);
        $_SESSION['carret'] = $carret;
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h2>El teu carret:</h2>
    <ul>
        <?php foreach ($carret as $producte => $quantitat) { ?>
            <li>
                <?php echo $producte . ' (Quantitat: ' . $quantitat. ')';?>
                <a href="carret.php?eliminar=<?php echo urlencode($producte); ?>">Eliminar</a>
            </li>
       <?php } ?>
    </ul>
    <a href="ejercicio1.php">Afegir mes productes</a>
</body>

</html>