 <?php
 
 $server = "localhost";
 $usuario = "root";
 $contrasena ="";
 $db ="login";

 $conexion = mysqli_connect($server, $usuario, $contrasena, $db)
 or die("Error en la Conexion");

 $uname = $_POST ['txtUname'];
 $cedula = $_POST ['txtcedula'];
 $Nombre = $_POST ['txtNombre'];
 $Apellidos = $_POST ['txtApellidos'];
 $pass = $_POST['txtpass'];
 //$verificarpassword = $_POST ['txtverificarpassword'];
 $nota = $_POST ['txtnota'];
 $pass = sha1($pass);

 if ($_POST['txtpass'] ==""){
   $insertar = "UPDATE usuarios SET `Nombres`='$Nombre',`Apellidos`='$Apellidos',`cedula`=$cedula, `uname`='$uname',`nota`='$nota' WHERE uname = '$uname' AND cedula = $cedula";
} else {
  $insertar = "UPDATE usuarios SET `Nombres`='$Nombre',`Apellidos`='$Apellidos',`cedula`=$cedula, `uname`='$uname', `pass`='$pass', `nota`='$nota' WHERE uname = '$uname' AND cedula = $cedula";
 }
// pendiente///////////// 25-09-2019
// $insertar = "UPDATE usuarios where( 'uname'$Nombre')";

// pendiente/////////////   25-09-2019

// $resultado = mysqli_query($conexion,$insertar) or die ("Error al insertar los Registro");
 $resultado = mysqli_query($conexion,$insertar);
 if(!$resultado) {
 echo "Error #".mysqli_errno($conexion).":".mysqli_error($conexion)."<br>";

 } else {
 mysqli_close($conexion);
 echo "Datos Modificados correctamente";
 }
 ?>

   <!-- $insertar = "UPDATE usuarios (`Nombres`, `Apellidos`, `cedula`, `uname`, `pass`, `nota`) SET ('$Nombre', '$Apellidos', '$cedula', '$Uname', '$pass','$nota')"; -->