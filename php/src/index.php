<?php
require $_SERVER['DOCUMENT_ROOT'] . '../vendor/autoload.php';

use CFV\Models\Cotxe;
use CFV\Models\Motocicleta;
use CFV\Models\Vehicle;


function mostrarDetallsVehicle(Vehicle $vehicle){
    echo $vehicle->mostrarDetalls() . "\n";
}

$moto = new Motocicleta(400);
$cotxe = new Cotxe("Audi", "A5");

mostrarDetallsVehicle($moto);
mostrarDetallsVehicle($cotxe);