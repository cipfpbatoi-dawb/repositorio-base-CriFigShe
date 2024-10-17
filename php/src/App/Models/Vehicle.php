<?php
namespace CFV\Models;
class Vehicle{
    protected $tipus;

    public function __construct($tipus){
        $this->tipus = $tipus;
    }

    public function mostrarDetalls(){
        return "Tipus: " . $this->tipus;
    }

    public function mostrarDetallsVehicle(Vehicle $vehicle){
        echo $vehicle->mostrarDetalls() . "\n";
    }
}

