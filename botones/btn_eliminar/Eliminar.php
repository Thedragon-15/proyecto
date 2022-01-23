<html>
    <head>
        <title> Eliminar </title>
    </head>
    <body>
        <?php

        $server = "localhost";
        $usuario = "root";
        $contrasena ="";
        $bd ="login";

        $conexion = mysqli_connect($server,$usuario,$contrasena,$bd)
        or die ("Error en la conexion");

        $Nombre = $_POST ['txtUname'];
        
        $insertar="DELETE FROM usuarios where( uname='$Nombre')";
        
        $resultado = mysqli_query($conexion,$insertar);
       if(!$resultado || $resultado == 0) {
        echo "Error #".mysqli_errno($conexion).":".mysqli_error($conexion)."<br>";
       } else {
         mysqli_close($conexion);
         echo "Datos eliminados correctamente";
       }
        ?>
    </body>
</html>