<?php
    class CuentaBancaria {
        public $numeroCuenta;
        public $titular;
        public $saldo;
        const SOBREGIRO = -10000;

        public function __construct($numeroCuenta, $titular, $saldo) {
            $this->numeroCuenta = $numeroCuenta;
            $this->titular = $titular;
            $this->saldo = $saldo;
        }

        public function depositar($cantidad) {
            $this->saldo += $cantidad;
        }

        public function retirar($cantidad) {
            if ($this->saldo > $cantidad && $this->saldo < self::SOBREGIRO) {
                $this->saldo -= $cantidad;
            } else {
                echo "Saldo insuficiente / Sobregiro excedido.";
            }
        }

        public function transferir($monto, $cuentaDestino) {
            $this->saldo -= $monto;
            $cuentaDestino->saldo += $monto;
            echo "Transferencia exitosa.";
        }
    };
?>