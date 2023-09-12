<?php
    trait PorcentajeMovimiento {
        public function calcularImpuestoTransferencia($monto, $cuentaOrigen) {
            $PORCENTAJE_TRANSFERENCIA = 0.6;
            $cuentaOrigen->saldo -=$monto*$PORCENTAJE_TRANSFERENCIA/100;
        }
        public function calcularImpuestoRetiro($monto, $cuentaOrigen) {
            $PORCENTAJE_DEPOSITO = 2;
            $cuentaOrigen->saldo -=$monto*$PORCENTAJE_DEPOSITO/100;
        }
    }
?>