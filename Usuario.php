<?php
session_start();

require 'empleados/empleados.php';
if (isset($_SESSION['User']) && $_SESSION['User'] != "") {
    $user = $_SESSION ['User'];
} else
{
    header("location:admin.php");
}
?>

<!DOCTYPE html>
<html>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="icon" href="imagenes/icono2.ico">
<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
<!--<link rel="stylesheet" type="text/css" href="ccs/estilos.css">-->
<!-- referencia iconos-->
<link rel="icon" href="imagenes/icono2.ico">

<!-- link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
 -->





<style>
    .edit {
        margin-top: 50px;
        margin-bottom: 100px;
        margin-right: 450px;
        margin-left: 450px;
    }

    .edit {
        border: 4px solid black;
        padding: 60px 80px 100px 90px;
        border-style: solid;
        border-color: #52a9ff;


    }

    .col1

    /* Usuario */
        {

        position: relative;
        border: 1px solid #52a9ff;
        left: 0%;
        width: 50%;
        bottom: 15px;
    }

    .col2

    /*  Cedula */
        {

        position: relative;
        border: 1px solid #52a9ff;
        left: 0;
        width: 50%;
        top: 1px;

    }

    .col3

    /*  Nombres */
        {

        position: relative;
        border: 1px solid #52a9ff;
        left: 0;
        width: 50%;
        bottom: 1px;
        top: 15px;
    }

    .col4

    /*  Apellidos */
        {

        position: relative;
        border: 1px solid #52a9ff;
        left: 0;
        width: 50%;
        top: 30px;
    }

    .col5

    /*  Password */
        {

        position: relative;
        border: 1px solid #52a9ff;
        left: 0;
        width: 50%;
        top: 40px;
    }

    .col6

    /*  verificar Password */
        {

        position: relative;
        border: 1px solid #52a9ff;
        left: 0;
        width: 50%;
        top: 50px;
    }

    .col7

    /*  Nota */
        {

        position: relative;
        border: 1px solid #52a9ff;
        left: 0;
        width:50%;
        bottom: 1px;
        top: 60px;
    }

    .col8

    /* botones  */
        {

        position: relative;
        border: 1px;
        left: 100px;
        width: 100%;
        bottom: 1px;
        top: 80px;
        right: 80px;
        display:

    }



    .col10

    /* Session  */
        {

        position: relative;
        border: 1px;
        left: 650px;
        /*
            
            width: 85%;
            bottom: 1px;
            top:80px;
             */
    }
</style>

<head>
    <title>GRUPO ATAHUALPA</title>
</head>

<body style="background-image:url('imagenes/titulo2.png');
          background-repeat: no-repeat;
          background-size: cover;">




    <nav class="navbar navbar-expand-sm bg-dark navbar-dark">
        <!-- Brand -->
        <span class="navbar-brand mb-0 h1" href="#">BIENVENIDOS</a></span>

        <img src="imagenes/ico1.png" width="70" height="70" alt="">

        <!-- Links -->
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link" href="index_sistema.php">inicio</a>
            </li>
            <!-- <li class="nav-item"> 
      <a class="nav-link" href="#">Link 2</a>
    </li> -->

            <!-- Dropdown -->
            <!-- <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
                    Sitema de Gestion
                </a>
                <div class="dropdown-menu">
                    <a class="dropdown-item" href="wellcome.php">personal</a>
                    <a class="dropdown-item" href="usuario.php">usuarios</a>
                   <a class="dropdown-item" href="#">Link 3</a> -->
                </div>
            </li>
            <!-- <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
                    Provedor y Beneficiario
                </a>
                <div class="dropdown-menu">
                    <a class="dropdown-item" href="proveedor/proveedor.php">Provedor</a>
                    <a class="dropdown-item" href="usuario.php">Beneficiario</a>
                   <a class="dropdown-item" href="#">Link 3</a> -->
                </div>
            </li> 
        </ul>

        <div class="col10">
            <nav class="navbar navbar-expand-sm bg-dark navbar-dark">
                <ul>
                    <!--<li><a class="text-light" title="Usuario">Hola, -->

                            <!--  Code para iniciar seccion -->
                            <?php
                            if (isset($_SESSION['User']) && $_SESSION['User'] != '') {
                                echo '<li><a class="text-light" title="Usuario">Hola, '.$_SESSION['User'].'</a></li>';
                            } else {
                                echo '<li><a class="text-light" title="Usuario">Hola, Invitado</a></li>';;
                                //header("location:admin.php");
                            }
                            ?>
                    <!--  Code para iniciar seccion -->


                    <li><a href="logout.php?logout" a class="text-dark "><button type="button" class="btn btn-light">Cerrar Seccion</a></button>'</li>
                </ul>
            </nav>

        </div>
    </nav>

    <?php
    if (isset($_POST['agregar'])) {
        require 'botones/btn_agregar/registro.php';
    }
    $Uname = $cedula = $Nombre = $Apellidos = $nota = "";
    if (isset($_POST['buscar'])) {
        require 'botones/btn_busqueda/buscar.php';
        // $usuario = $_POST['txtUname'];
        // $query = "SELECT * FROM usuarios WHERE uname = '$usuario'";
        // $sql = mysqli_query($conexion, $query);
        // var_dump(mysqli_fetch_assoc($sql));

    }
    if (isset($_POST['eliminar'])) {
        require 'botones/btn_eliminar/Eliminar.php';
    }

    if (isset($_POST['Modificar'])) {
        require 'botones/btn_actualizar/actualizar.php';
    }
    ?>

    <center>
        <br>
        
        <img src="imagenes/logo1.png" alt="GRUPO ATAHUALPA" style=" width:200px;height:150px;">
        <h2 class="display-4">Formulario de Usuario</h2>
    </center>

    <form class="edit" method="POST" id="form1">
        <div class="row">
            <div class="col1">

                <input type="text" class="form-control" name="txtUname" id="txtUname" value="<?php echo $Uname; ?>" placeholder="usuario" require="">

            </div>
        </div>

        <div class="col2">
            <input type="text" class="form-control" name="txtcedula" id="txtcedula" value="<?php echo $cedula; ?>" placeholder="cedula" require="">
        </div>

        <div class="col3">
            <input type="text" class="form-control " name="txtNombre" id="txtNombre" value="<?php echo $Nombre; ?>" placeholder="Nombres" require="">
        </div>

        <div class="col4">
            <input type="text" class="form-control" name="txtApellidos" id="txtApellidos" value="<?php echo $Apellidos; ?>" placeholder="Apellidos" require="">
        </div>

        <div class="col5">
            <input type="password" class="form-control" name="txtpass" id="txtpass" placeholder="password" require="">
        </div>

        <div class="col6">
            <input type="password" class="form-control" name="txtverificarpassword" id="txtverificarpassword" placeholder="verificarpassword" require=>
        </div>



        <div class="col7">
            <input type="text" class="form-control" name="txtnota" id="txtnota" value="<?php echo $nota; ?>" placeholder="nota" require=>

        </div>
        <form action="Eliminar.php" method="POST">
            <!-- BOTONES -->
            <div class="col8">
                <input type="submit" name="buscar" value="buscar" class="btn btn-info">
                <input type="submit" name="agregar" value="agregar" class="btn btn-primary">
                <input type="submit" name="Modificar" value="Modificar" class="btn btn-warning">
                <input type="submit" name="eliminar" value="eliminar" class="btn btn-danger">



        </form>


        <!-- <div class="col9">
            <form action="actualizar.php" method="POST">
                <input type="submit" name="Modificar" value="Modificar" class="btn btn-warning">
            </form>
        </div> -->

</body>

</html>