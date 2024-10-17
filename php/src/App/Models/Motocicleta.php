<?php

namespace CFV\Models;
class Motocicleta extends Vehicle{
    private $cilindrada;

    public function __construct($cilindrada) {
        parent::__construct("Motocicleta");
        $this->cilindrada=$cilindrada;
    }

    public function mostrarDetalls() {
        return parent::mostrarDetalls() . "Cilindrada: " . $this->cilindrada;
    }
}

// $moto = new Motocicleta(400);
// echo $moto->mostrarDetalls();