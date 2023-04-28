<?php
    $comision = (int)$_POST['importe'] * 0.075;
    $bono = (int)$_POST['hijos'] * 50;
    $descuento = 600 * 0.11;
    $sueldoBruto = 600 - $descuento;
    $sueldoNeto = $sueldoBruto + $comision;
        echo "Comision: ".$comision."<br>";
        echo "Bonificacion: ".$bono."<br>";
        echo "Descuento: ".$descuento."<br>";
        echo "Sueldo Bruto: ".$sueldoBruto."<br>";
        echo "Sueldo Neto: ".$sueldoNeto."<br>";
?>