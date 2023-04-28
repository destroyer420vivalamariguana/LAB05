<!DOCTYPE html>
<hmtl>
    <head>
        <title>Sueldo Empleado</title>
    </head>
    <body>
        <form method="post" action="">
            Importe total: <br> <input type="text" name="importe"> <br>
            Cantidad de hijos: <br> <input type="text" name="numhijos"> <br>
            
            <input type="submit" name="Calcular" value="Calcular">
        </form>
    <?php
    //declaracion de vaiables
        $importe=$_POST['importe'];
        $num_hijo=$_POST['numhijos'];
    ?>
    
    </body>
</html>