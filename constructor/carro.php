<?php

class Carro{
    public $color;
    public $marca;
    public $modelo;
    public $velocidad;
    public $caballaje;
    public $puestos;

    // public function __construct()
    // {
    //     $this->color = "Rojo";
    //     $this->marca = "Ferri";
    //     $this->modelo= "Gallardo";
    //     $this->velocidad = 500;
    //     $this->caballaje = 300;
    //     $this->puestos = 2;
    // }

    public function __construct($color, $marca, $modelo, $velocida, $caballaje, $puestos)
    {
        $this->color = $color;
        $this->marca = $marca;
        $this->modelo = $modelo;
        $this->velocidad = $velocida;
        $this->caballaje = $caballaje;
        $this->puestos = $puestos;
    }
}