<?php
class FiltroViaje {
    public $nombreHotel;
    public $ciudad;
    public $pais;
    public $fechaViaje;
    public $duracion;

    public function __construct($nombreHotel, $ciudad, $pais, $fechaViaje, $duracion) {
        $this->nombreHotel = $nombreHotel;
        $this->ciudad = $ciudad;
        $this->pais = $pais;
        $this->fechaViaje = $fechaViaje;
        $this->duracion = $duracion;
    }

    public function buscarPaquetes() {
        return "Buscando paquetes en {$this->ciudad}, {$this->pais} desde el {$this->fechaViaje} por {$this->duracion} días en el hotel {$this->nombreHotel}.";
    }
}
?>
