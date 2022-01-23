<?php
        $server = "localhost";
        $usuario = "root";
        $contrasena ="";
        $db ="login";
        
       $conexion = mysqli_connect($server, $usuario, $contrasena, $db)
               or die("Error en la Conexion");
       
       $Uname = $_POST ['txtUname'];
       $cedula = $_POST ['txtcedula'];
       $Nombre = $_POST ['txtNombre'];
       $Apellidos = $_POST ['txtApellidos'];
       $pass = $_POST['txtpass'];
       //$verificarpassword = $_POST ['txtverificarpassword'];
       $nota = $_POST ['txtnota'];
       $pass = sha1($pass);
       //INSERT INTO `usuarios`(`E_ID`, `Nombres`, `Apellidos`, `cedula`, `Nota`, `Uname`, `pass`) VALUESd`, `nota`) VALUES ([value-1],[value-2],[value-3],[value-4],[value-5],[value-6])
       $insertar = "INSERT INTO usuarios (`Nombres`, `Apellidos`, `cedula`, `uname`, `pass`, `nota`) values ('$Nombre', '$Apellidos', '$cedula', '$Uname', '$pass','$nota')";
       //$resultado = mysqli_query($conexion,$insertar) or die ("Error al insertar los Registro");
       $resultado = mysqli_query($conexion,$insertar);
       if(!$resultado || $resultado == 0) {
        echo "Error #".mysqli_errno($conexion).":".mysqli_error($conexion)."<br>";
       } else {
         mysqli_close($conexion);
         echo "Datos insertados correctamente";
       }
?> 