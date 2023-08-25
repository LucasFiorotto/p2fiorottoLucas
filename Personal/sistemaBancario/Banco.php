<?php
    require_once "Persona.php";
    class Banco {
        public $nombre;
        public $direccion;
        public $listaCuentas = array();

        public function __construct($nombre, $direccion) {
            $this->nombre = $nombre;
            $this->direccion = $direccion;
        }

        public function agregarCuenta($cuenta) {
           
        }

        public function buscarCuentaPorTitular($nombre, $apellido) {
            
        }
    };
?>