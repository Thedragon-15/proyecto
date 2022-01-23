<?php
$server = "localhost";
$usuario = "root";
$contrasena = "";
$db = "empresa1";

$conexion = mysqli_connect($server, $usuario, $contrasena, $db)
    or die("Error en la conexion");

$Nombre =$ApellidoP = $ApellidoM =$direccion =$fecha_nacimiento=$estado_civil =$telefono =$telefono_local =$Correo =$Nacionalidad=$Genero =$Pais =$Estado=$Municipio =$Parroquia =$Foto ="";
if (empty($_POST['txtcedula'])) {

    echo "<h1>Debe insertar el nombre </h1>";
} else {
    $txtusuario = $_POST['txtcedula'];
    $query = "SELECT * FROM empleados1 WHERE cedula = '$txtusuario'";

    $resultado = mysqli_query($conexion, $query);
    if (mysqli_num_rows($resultado) > 0) {
        while ($fila = mysqli_fetch_array($resultado)) {
            
            $Nombre=$fila['Nombre'];
            $ApellidoP=$fila['ApellidoP'];
            $ApellidoM=$fila['ApellidoM'];
            $direccion=$fila['direccion'];
            $fecha_nacimiento=$fila['fecha_nacimiento'];
            $estado_civil=$fila['estado_civil'];
            $telefono=$fila['telefono'];
            $telefono_local=$fila['telefono_local'];
            $Correo=$fila['Correo'];
            $Nacionalidad=$fila['Nacionalidad'];
            $Genero=$fila['Genero'];
            $Pais=$fila['Pais'];
            $Estado=$fila['Estado'];
            $Municipio=$fila['Municipio'];
            $Parroquia=$fila['Parroquia'];
            $Foto=$fila['Foto'];
        }
    } else {
        echo "<h1>No se hall&oacute; el nombre de usuario</h1>";
    }

    if (!$resultado) {
        echo "Error #" . mysqli_errno($conexion) . ":" . mysqli_error($conexion) . "<br>";
    }
}



?>


<!-- $Nombre =$ApellidoM =$direccion =$fecha_nacimiento=$estado_civil =$telefono =$telefono_local =$Correo =$Nacionalidad=$Genero =$Pais =$Estado=$Municipio =$Parroquia =$Foto  -->