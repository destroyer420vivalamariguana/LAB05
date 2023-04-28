<?php
        $precio=(int)$_POST['precio'];
        $cantidad=(int)$_POST['cant'];
        $nuevoP=$precio - ($precio*0.05);
        $importeComp=$nuevoP*$cantidad;
        $importeDesc=$importeComp*0.07;
        $importePago=$importeComp - $importeDesc;
        $regalo= $cantidad * 2;
            echo "Precio con descuento: ".$nuevoP."<br>";
            echo "Importe compra: ".$importeComp."<br>";
            echo "Descuento por importe: ".round($importeDesc,2)."<br>";
            echo "Pago total: ".round($importePago,2)."<br>";
            echo "Caramelos de regalo: ".$regalo."<br>";
?>