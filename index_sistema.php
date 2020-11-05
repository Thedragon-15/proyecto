<html>

<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="icono.ico">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <!--<link rel="stylesheet" type="text/css" href="ccs/estilos.css">-->
    <!-- referencia iconos-->
    <link rel="icon" href="imagenes/icono2.ico">
    
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>



   <style>
        
        .col-btn {
            width: 45%;
            display: contents;
            /* border: px double #C00;  */
            /* margin: auto;  */
            padding: 0;
            
        } 

        .row-btn {
            /* border: 1px solid #A32c45;  */
            width:80%; 
            margin: 15px; 
            padding: 0;
        }
      
        

    </style>









  <head>
        <title>GRUPO ATAHUALPA</title>
    </head>
    <body style="background-image:url('imagenes/titulo2.png');
          background-repeat: no-repeat;
          background-size: cover;">


<?php // este es el botom de inicio de session



session_start();
require 'empleados/empleados.php';
if(isset($_SESSION['User']))
{
    echo ' Hola: ' . $_SESSION ['User'].'<br/>';
    echo '<a class="text-dark"" href="logout.php?logout"><button type="button" class="btn btn-outline-light ">Cerrar Seccion</a></button>';
    
}   
else
{
    header("location:admin.php");
}
?> <!--  aqui termina el  codigo para inicio de session --> 

<body>
<center>    
<h1>Modulo de Gestion </h1>
</center>
    
<center>


<div class="row-btn">
    <div class="col-btn">
        <a href="wellcome.php">
            <img src="imagenes/iconos/registro.png" alt="registro" width="100" height="100">
            <span>Registro</span>
        </a>

    </div>
    <div class="col-btn">
        <a href="usuario.php">
            <img src="imagenes/iconos/usuarios.png" alt="usuario" width="100" height="100">
            <span>Usuario</span>
        </a>


        <div class="row-btn1" >
    <div class="col-btn1">
        <a href="proveedor/proveedor.php">
            <img src="imagenes/iconos/persona.png" alt="registo" width="100" height="100">
            <span>Proveedor y Beneficiario</span>
            </a>


        </div>

    </div>

    
</div>
</div>


    <!-- </div>
    <div class="col-btn">
        <a href="usuario.php">
            <img src="imagenes/usuario.png" alt="usuario" width="100" height="100">
            <span>Usuario</span>
        </a>
    </div> -->
    


</body>
</html>