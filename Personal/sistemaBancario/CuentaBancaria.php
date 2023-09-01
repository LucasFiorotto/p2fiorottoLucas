<?php
    class CuentaBancaria {
        public $numeroCuenta;
        public $titular;
        public $saldo;
        const SOBREGIRO = 10000;

        public function __construct($numeroCuenta, $titular, $saldo) {
            $this->numeroCuenta = $numeroCuenta;
            $this->titular = $titular;
            $this->saldo = $saldo;
        }

        public function depositar($cantidad) {
            $this->saldo += $cantidad;
            //echo "Deposito exitoso.";
        }

        public function retirar($cantidad) {
            if ($cantidad < $this->saldo) {
                $this->saldo -= $cantidad;
                //echo "Retiro exitoso.";
            } elseif (($cantidad > $this->saldo) && ($cantidad < ($this->saldo + self::SOBREGIRO))) {
                $this->saldo -= $cantidad;
                echo "Retiro exitoso. En sobregiro.";
            } elseif (($cantidad > $this->saldo) && ($cantidad > ($this->saldo + self::SOBREGIRO))) {
                echo "Saldo insuficiente.";
            }
        }

        public function transferir($monto, $cuentaDestino) {
            $this->saldo -= $monto;
            $cuentaDestino->saldo += $monto;
            echo "Transferencia exitosa.";
        }
    };
?>