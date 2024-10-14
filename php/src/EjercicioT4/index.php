<?php

// include_once("cotxe.php");
// include_once("motocicleta.php");
// include_once("vehicle.php");
function mostrarDetallsVehicle(Vehicle $vehicle){
    echo $vehicle->mostrarDetalls() . "\n";
}

$moto = new Motocicleta(400);
$cotxe = new Cotxe("Audi", "A5");

mostrarDetallsVehicle($moto);
mostrarDetallsVehicle($cotxe);