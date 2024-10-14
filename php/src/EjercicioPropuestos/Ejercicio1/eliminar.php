<?php
session_start();

session_unset();
session_destroy();

header('Location: ejercicio1.php');
?>