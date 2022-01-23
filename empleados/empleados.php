<?php 
// #CODE.. PARA DECLARAR LAS VARIABLES

$txtID=(isset($_POST['txtID']))?$_POST['txtID']:"";
$txtNombre=(isset($_POST['txtNombre']))?$_POST['txtNombre']:"";
$txtApellidoP=(isset($_POST['txtApellidoP']))?$_POST['txtApellidoP']:"";
$txtApellidoM=(isset($_POST['txtApellidoM']))?$_POST['txtApellidoM']:"";
$txtcedula=(isset($_POST['txtcedula']))?$_POST['txtcedula']:"";
$txtdireccion=(isset($_POST['txtdireccion'])) ? $_POST['txtdireccion']:"";
$txtfecha_nacimiento=(isset($_POST['txtfecha_nacimiento'])) ? $_POST['txtfecha_nacimiento']:"";
$txtestado_civil=(isset($_POST['txtestado_civil']))?$_POST['txtestado_civil']:"";
$txttelefono=(isset($_POST['txttelefono'])) ? $_POST['txttelefono']:"";
$txttelefonolocal=(isset($_POST['txttelefonolocal'])) ? $_POST['txttelefonolocal']:"";
$txtCorreo=(isset($_POST['txtCorreo']))?$_POST['txtCorreo']:"";
$txtnacionalidad=(isset($_POST['txtnacionalidad']))?$_POST['txtnacionalidad']:"";
$txtgenero=(isset($_POST['txtgenero']))?$_POST['txtgenero']:"";
$txtpais=(isset($_POST['txtpais'])) ? $_POST['txtpais']:"";
$txtestado=(isset($_POST['txtestado']))?$_POST['txtestado']:"";
$txtmunicipio=(isset($_POST['txtmunicipio'])) ? $_POST['txtmunicipio']:"";
$txtparroquia=(isset($_POST['txtparroquia'])) ? $_POST['txtparroquia'] : "";
$txtFoto=(isset($_FILES['txtFoto']["name"]))?$_FILES['txtFoto']["name"]:"";


// #CODE.. PARA VALIDAR ERROR.
$error=array();


$accion=(isset($_POST['accion']))?$_POST['accion']:"";
include ("conexion/conexion.php");

//  #CODE .. PARA EL BOTON DE AGREGAR.
switch($accion){
   case "btnAgregar":
   
///  #CODE.. PARA VALIDAR EL ERROR. 
if($txtNombre==""){
   $error['Nombre']="Escribe el nombre";
}
if($txtApellidoP==""){
   $error['ApellidoP']="Escribe el ApellidoP";
}


if(count($error)>0){
   $mostrarModal=true;
   break;

}




//  #CODE .. QUERY RESPECTIVO PARA INSERTAR LOS DATOS.

   $sentencia=$pdo->prepare("INSERT INTO empleados1(Nombre,ApellidoP,ApellidoM,cedula,direccion,fecha_nacimiento,estado_civil,telefono,telefono_local,Correo,Nacionalidad,Genero,Pais,Estado,Municipio,Parroquia,Foto)
    VALUES(:Nombre,:ApellidoP,:ApellidoM,:cedula,:direccion,:fecha_nacimiento,:estado_civil,:telefono,:telefono_local,:Correo,:Nacionalidad,:Genero,:Pais,:Estado,:Municipio,:Parroquia,:Foto)");

 $sentencia->bindParam(':Nombre',$txtNombre);
 $sentencia->bindParam('ApellidoP',$txtApellidoP);
 $sentencia->bindParam(':ApellidoM',$txtApellidoM);
 $sentencia->bindParam(':cedula',$txtcedula);
 $sentencia->bindParam(':direccion', $txtdireccion);
 $sentencia->bindParam(':fecha_nacimiento',$txtfecha_nacimiento);
 $sentencia->bindParam(':estado_civil',$txtestado_civil);
 $sentencia->bindParam(':telefono', $txttelefono);
 $sentencia->bindParam(':telefono_local',$txttelefonolocal);
 $sentencia->bindParam(':Correo',$txtCorreo);
 $sentencia->bindParam(':Nacionalidad',$txtnacionalidad);
 $sentencia->bindParam(':Genero',$txtgenero);
 $sentencia->bindParam(':Pais',$txtpais);
 $sentencia->bindParam(':Estado',$txtestado);
 $sentencia->bindParam(':Municipio',$txtmunicipio);
 $sentencia->bindParam(':Parroquia',$txtparroquia);
 $Fecha= new Datetime();

 $nombreArchivo=($txtFoto!="")?$Fecha->getTimestamp()."_".$_FILES["txtFoto"]["name"]:"foto.png";
 $tmpFoto=$_FILES['txtFoto']["tmp_name"];
 if($tmpFoto!=""){

 move_uploaded_file($tmpFoto,"imagenes/".$nombreArchivo);
 }

$sentencia->bindParam(':Foto',$nombreArchivo);
$sentencia->execute();
break;
   
       //echo $txtID;
       //echo "Presionaste el btnAgregar";
  
// #CODE.. AQUI TERMINA EL CODE PARA BOTON DE AGREGAR 


// 
// 
// 
       
case "btnModificar":                                      

   
   $sentencia=$pdo->prepare(" UPDATE empleados1 SET         
   Nombre=:Nombre,
   ApellidoP=:ApellidoP,
   ApellidoM=:ApellidoM,
   cedula=:cedula,
   direccion=:direccion,
   fecha_nacimiento=:fecha_nacimiento,
   estado_civil=:estado_civil,
   telefono=:telefono,
   telefono_local=:telefono_local,
   Correo=:Correo,
   Nacionalidad=:Nacionalidad,
   Genero=:Genero,
   Pais=:Pais,
   Estado=:Estado,
   Municipio=:Municipio,
   Parroquia=:Parroquia
   WHERE
   id=:id");
    

    $sentencia->bindParam(':Nombre',$txtNombre);
    $sentencia->bindParam(':ApellidoP',$txtApellidoP);
    $sentencia->bindParam(':ApellidoM',$txtApellidoM);
    $sentencia->bindParam(':cedula', $txtcedula);
    $sentencia->bindParam(':direccion',$txtdireccion);
    $sentencia->bindParam(':fecha_nacimiento',$txtfecha_nacimiento);
    $sentencia->bindParam(':estado_civil',$txtestado_civil);
    $sentencia->bindParam(':telefono',$txttelefono);
    $sentencia->bindParam(':telefono_local',$txttelefonolocal);
    $sentencia->bindParam(':Correo',$txtCorreo);
    $sentencia->bindParam(':Nacionalidad',$txtnacionalidad);
    $sentencia->bindParam(':Genero',$txtgenero);
    $sentencia->bindParam(':Pais',$txtpais);
    $sentencia->bindParam(':Estado',$txtestado);
    $sentencia->bindParam(':Municipio',$txtmunicipio);
    $sentencia->bindParam(':Parroquia',$txtparroquia);
    $sentencia->bindParam(':id',$txtID);
    $sentencia->execute();

// #CODE.. PARA ACTUALIZAR LA FOTO EN TIEMPO REAL. 

    $Fecha= new Datetime();
    $nombreArchivo=($txtFoto!="")?$Fecha->getTimestamp()."_".$_FILES["txtFoto"]["name"]:"";
 
    $tmpFoto=$_FILES['txtFoto']["tmp_name"];


    if($tmpFoto!=""){
        move_uploaded_file($tmpFoto,"imagenes/".$nombreArchivo);
    }


   $sentencia=$pdo->prepare(" UPDATE empleados1 SET  
   Foto=:Foto WHERE  id=:id");
   $sentencia->bindParam(':Foto',$nombreArchivo);
   $sentencia->bindParam(':id',$txtID);
   $sentencia->execute();
       
// #CODE.. AQUI TERMINA EL CODE PARA  ACTUALIZAR FOTO.


    header('location:wellcome.php');

       //echo $txtID;
      // echo "Presionaste el btnModificar";
   break;
    
// #CODE.. AQUI TERMINA EL CODE PARA  ACTUALIZAR .


// 
// 
// 
// 

// #CODE.. AQUI COMIENZA BOTON DE ELIMINAR.

   case "btnEliminar":

   $sentencia=$pdo->prepare(" DELETE FROM empleados1 WHERE id=:id");
    $sentencia->bindParam(':id',$txtID);
    $sentencia->execute();

    header('location:wellcome.php');

       //echo $txtID;
       //echo "Presionaste el btnEliminar";
   break;

   case "btnCancelar":
       //echo $txtID;
       //echo "<br>Presionaste el btnCancelar";
   break;
   


}

//  #CODE.. AQUI TERMINA EL CODE PARA EL BOTON DE ELIMINAR.





// #CODE  PRINT DE TABLA MUESTRA LA TABLA EN LA HTML.

$sentencia=$pdo->prepare("SELECT * FROM `empleados1` WHERE 1");
$sentencia->execute();
$listaEmpleados=$sentencia->fetchAll(PDO ::FETCH_ASSOC);

//print_r($listaEmpleados);

?>