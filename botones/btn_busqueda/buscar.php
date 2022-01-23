<?php
 $server = "localhost";
 $usuario = "root";
 $contrasena ="";
 $db ="login";

 $conexion = mysqli_connect($server,$usuario,$contrasena,$db)
 or die ("Error en la conexion");

 $Uname = $cedula = $Nombre = $Apellidos = $nota = "";
if(empty($_POST['txtUname'])){

    echo "<h1>Debe insertar el nombre de usuario</h1>";

} else {
 $txtusuario = $_POST['txtUname'];
 $query = "SELECT * FROM usuarios WHERE uname = '$txtusuario'";

 $resultado = mysqli_query($conexion,$query);
 if (mysqli_num_rows($resultado) >0){
    while($fila = mysqli_fetch_array($resultado)) {
        $Uname = $fila['uname'];
        $cedula = $fila['cedula'];
        $Nombre = $fila['Nombres'];
        $Apellidos = $fila['Apellidos'];
        $nota = $fila['nota'];

    }
    
 } else {
    echo "<h1>No se hall&oacute; el nombre de usuario</h1>";
 }

 if(!$resultado) {
  echo "Error #".mysqli_errno($conexion).":".mysqli_error($conexion)."<br>";
 }
}



?>


