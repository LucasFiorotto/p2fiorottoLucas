<?php
    require_once "ImpuestoPorcentaje_trait.php";
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

        public static function bonoDeposito($cantidad, $cuentaOrigen) {
            if ($cantidad > 500) {
                $cuentaOrigen->saldo += 100;
            }
        }

        public function depositar($cantidad, $cuentaOrigen) {
            $cuentaOrigen->saldo += $cantidad;
            CuentaBancaria::bonoDeposito($cantidad, $cuentaOrigen);
            //echo "Deposito exitoso.";
        }

        use PorcentajeMovimiento;

        public function retirar($cantidad, $cuentaOrigen) {
            if ($cantidad < $this->saldo) {
                $this->saldo -= $cantidad;
                $cuentaOrigen->calcularImpuestoRetiro($cantidad, $cuentaOrigen);
                //echo "Retiro exitoso.";
            } elseif (($cantidad > $this->saldo) && ($cantidad < ($this->saldo + self::SOBREGIRO))) {
                $this->saldo -= $cantidad;
                $cuentaOrigen->calcularImpuestoRetiro($cantidad, $cuentaOrigen);
                echo "Retiro exitoso. En sobregiro.";
            } elseif (($cantidad > $this->saldo) && ($cantidad > ($this->saldo + self::SOBREGIRO))) {
                echo "Saldo insuficiente.";
            }
        }

        public function transferir($monto, $cuentaOrigen, $cuentaDestino) {
            $cuentaOrigen->saldo -= $monto;
            $cuentaDestino->saldo += $monto;
            $cuentaOrigen->calcularImpuestoTransferencia($monto, $cuentaOrigen);
            echo "Transferencia exitosa.";
        }
    };
?>