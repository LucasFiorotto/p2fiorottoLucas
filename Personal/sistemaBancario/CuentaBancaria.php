<?php
    class CuentaBancaria {
        public $numeroCuenta;
        public $titular;
        public $saldo;

        public function __construct($numeroCuenta, $titular, $saldo) {
            $this->numeroCuenta = $numeroCuenta;
            $this->titular = $titular;
            $this->saldo = $saldo;
        }

        public function depositar($cantidad) {
            $this->saldo += $cantidad;
        }

        public function retirar($cantidad) {
            $this->saldo -= $cantidad;
        }
    };
?>