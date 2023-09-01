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

    // 4) Crear una funcion transferir (monto, cuentaOrigen, cuentaDestino) en la clase CuentaBancaria que permita transferir un monto de una cuenta a la otra. Actualizar los saldos de las dos cuentas y mostrar un mensaje de transferencia exitosa.
    // 5) Añade una verificacion en el constructor de Persona para que la edad sea un numero positivo y mayor a 0, si la edad no cumple con esos requisitos, asignar un valor predeterminado por ej. 18 años.
    // 6) Modifica el metodo retirar que esta en la clase CuentaBancaria para permitir retiros, incluso si no hay saldo suficiente pero con un limite de sobregiro, definir una constante que se llame limiteSobregiro para controlar el sobregiro.

    require_once "Persona.php";
    require_once "Banco.php";
    require_once "CuentaBancaria.php";

    $persona1 = new Persona("Lucas", "Fiorotto", 0, 45389325);
    $persona2 = new Persona("Pablo", "Martinez", 19, 45742785);
    //echo $persona1->nombre, $persona1->apellido, $persona1->edad, $persona1->dni;

    $cuentaBancaria1 = new CuentaBancaria(1, $persona1, 100000);
    $cuentaBancaria2 = new CuentaBancaria(2, $persona2, 250000);

    $banco1 = new Banco("Santander", "Urquiza 1000");

    $banco1->agregarCuenta($cuentaBancaria1);
    $banco1->agregarCuenta($cuentaBancaria2);

    echo "Operación 1."; echo "<br>";
    $cuentaBancaria1->depositar(5000);
    $cuentaBancaria2->depositar(15000);
    echo "Saldo cuenta 1: ".$cuentaBancaria1->saldo; echo "<br>";
    echo "Saldo cuenta 2: ".$cuentaBancaria2->saldo; echo "<br>";
    
    echo "<br>";

    echo "Operación 2."; echo "<br>";
    $cuentaBancaria1->retirar(2500); 
    $cuentaBancaria2->retirar(7500);
    echo "Saldo cuenta 1: ".$cuentaBancaria1->saldo; echo "<br>";
    echo "Saldo cuenta 2: ".$cuentaBancaria2->saldo; echo "<br>";  

    echo "<br>";

    echo "Operación 3."; echo "<br>";
    $banco1->buscarCuentaPorTitular('Lucas', 'Fiorotto'); echo "<br>";
    $banco1->buscarCuentaPorTitular('Pablo', 'Martinez'); echo "<br>";

    echo "<br>";
    
    //getter and setter.
    //$persona2->setNombre("Santiago");
    //echo ($persona2->getNombre());

    echo "Consigna 4."; echo "<br>";
    $cuentaBancaria1->transferir(5000, $cuentaBancaria2); echo "<br>";
    echo "Cuenta 1: ".$cuentaBancaria1->saldo; echo "<br>";
    echo "Cuenta 2: ".$cuentaBancaria2->saldo; echo "<br>";

    echo "<br>";

    echo "Consigna 5."; echo "<br>";
    echo "Instancia: persona1 = new Persona(Lucas, Fiorotto, 0, 45389325)"; echo "<br>";
    echo "Edad: ".$persona1->edad; echo "<br>";

    echo "<br>";

    echo "Consigna 6."; echo "<br>";
    $cuentaBancaria1->retirar(100000); echo "<br>";
    echo "Saldo cuenta 1: ".$cuentaBancaria1->saldo;
?>