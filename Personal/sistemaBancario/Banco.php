<?php
    class Banco {
        public $nombre;
        public $direccion;
        public $listaCuentas = [];

        public function __construct($nombre, $direccion) {
            $this->nombre = $nombre;
            $this->direccion = $direccion;
        }

        public function agregarCuenta($numeroCuenta) {
            $this->listaCuentas[] = $numeroCuenta;
        }

        public function buscarCuentaPorTitular($nombre, $apellido) {
            foreach ($this->listaCuentas as $cuenta) {
                if ($cuenta->titular->nombre == $nombre && $cuenta->titular->apellido == $apellido) {
                    echo "Numero de cuenta: ".$cuenta->numeroCuenta." Titular: ".$cuenta->titular->nombre." ".$cuenta->titular->apellido;
                }
            }
        }
    };
?>