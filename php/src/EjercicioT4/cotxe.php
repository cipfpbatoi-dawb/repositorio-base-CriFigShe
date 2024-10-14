<?php
class Cotxe extends Vehicle{
    private $marca;
    private $model;

    public function __construct($marca, $model){
        parent::__construct("Cotxe");
        $this->marca = $marca;
        $this->model = $model;
    }

    // public function __destruct(){
    //     echo "\nL'objecte Cotxe s'ha destruit";
    // }

    public function setMarca($marca){
        $this->marca = $marca;
    }

    public function getMarca(){
        return $this->marca;
    }

    public function setModel($model){
        $this->model = $model;
    }

    public function getModel(){
        return $this->model;
    }

    public function mostraInformacio(){
        return parent::mostrarDetalls() . "Marca: " . $this->marca . ", Model:" . $this->model;
    }    
}

$cotxe = new Cotxe("Audi", "A5");
echo $cotxe->mostraInformacio();

