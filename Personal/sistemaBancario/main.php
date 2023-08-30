<?php
    // Sistema Bancario. Clases: Persona, Banco, CuentaBancaria.
    // Persona: nombre, apellido, edad, dni.
    // Banco: nombre, direccion, lista cuentas (array). Metodos: Constructor -> nombre y direccion, AgregarCuenta($cuenta), BuscarCuentaPorTitular($nombre, $apellido) = devuelve cuenta bancaria asociada a esa persona.
    // CuentaBancaria: numeroCuenta, titular (instancia clase Persona), saldo. Metodos: Constructor -> numero de cuenta, titular y saldo, Depositar($cantidad), Retirar($cantidad) (siempre y cuando tenga saldo).

    // 1) Crear al menos 2 instancias de la clase Persona y 2 instancias o mas de la clase CuentaBancaria.
    // 2) Crear 1 instancia de la clase banco y agregar las cuentas bancarias a la lista del banco.
    // 3) Realizar las siguientes operaciones:
    // op1. Deposita diferentes cantidades en las cuentas bancarias.
    // op2. Realiza retiros de diferentes montos de las cuentas bancarias, verificando que haya saldo suficiente.
    // op3. Busca una cuenta bancaria por el titular utilizando el metodo buscarCuentaPorTitular.

    require_once "Persona.php";
    require_once "Banco.php";
    require_once "CuentaBancaria.php";

    $persona1 = new Persona("Lucas", "Fiorotto", 19, 45389325);
    $persona2 = new Persona("Pablo", "Martinez", 19, 45742785);
    //echo $persona1->nombre, $persona1->apellido, $persona1->edad, $persona1->dni;

    $cuentaBancaria1 = new CuentaBancaria(1, $persona1, 100000);
    $cuentaBancaria2 = new CuentaBancaria(2, $persona2, 250000);

    $banco1 = new Banco("Santander", "Urquiza 1000");

    $banco1->agregarCuenta($cuentaBancaria1);
    $banco1->agregarCuenta($cuentaBancaria2);

    $cuentaBancaria1->depositar(5000);
    $cuentaBancaria2->depositar(15000);

    $cuentaBancaria1->retirar(2500);
    $cuentaBancaria2->retirar(7500);

    $banco1->buscarCuentaPorTitular('Lucas', 'Fiorotto');
    $banco1->buscarCuentaPorTitular('Pablo', 'Martinez');
?>