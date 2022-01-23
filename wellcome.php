<!--  aqui se termina el DRUP -->
<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <center>
    <title>SISTEMA ADMINISTRATIVO</title>
  </center>
  <link rel="icon" href="imagenes/icono2.ico">
  <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
  <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
  
  <!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script> -->



</head>

<body style="background-image:url('imagenes/titulo2.png')">
  <form action="" method="POST" enctype="multipart/form-data">

    <!-- menu despleglable NAV -->
    <header>
      <nav class="navbar navbar-expand-lg navbar navbar-light" style="background-color: #e3f2fd;">
        <span class="navbar-brand mb-0 h1" href="#">BIENVENIDOS</a></span>


        <img src="imagenes/icono2.ico" width="70" height="70" alt="">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        </button>


        </a>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
             <ul class="navbar-nav mr-auto">
              <li class="nav-item active">
                  <a class="nav-link" href="index_sistema.php">inicio <span class="sr-only">(current)</span></a>
              </li>
              
              <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                 Sistema de Gestion
              </a>
                  
              <div class="dropdown-menu" aria-labelledby="navbarDropdown">
              <a class="dropdown-item" href="Usuario.php">usuarios</a>
              <a class="dropdown-item" href="proveedor/proveedor.php">proveedor</a>
              <!-- <div class="dropdown-divider"></div>
              <a class="dropdown-item" href="#">Something else here</a> -->
             </div>
            </li>

              </ul>
              <nav class="navbar navbar-light" style="background-color: #e3f2fd;">
                
                  <p>
        
        
        
                <?php // #CODE.. COMIENZA PARA INICIAR SECCION


                session_start();
                require 'empleados/empleados.php';
                if (isset($_SESSION['User'])) {
                  echo ' Hola: ' . $_SESSION['User'] . '<br/>';
                  echo '<a class="text-dark"" href="logout.php?logout"><button type="button" class="btn btn-outline-light ">Cerrar Seccion</a></button>';
                } else {
                  header("location:admin.php");
                }
                ?>
                <!-- #CODE.. AQUI TERMINA PARA INICIAR SECCION -->



              </p>
            </form>
        </div>



      </nav>


      <nav class="navbar navbar-light bg-light">
        <a class="navbar-brand" href="pdf/reporte_visitas.php">
          <img src="imagenes/impresora3.png" width="50" height="50" alt="">
        </a>
      </nav>
      <!-- aqui termina la etiqueta NAV -->
      <br>
      <br>
      <!-- Modal -->
      <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
         <div class="modal-content">
         <div class="modal-header">
         <h3 class="modal-title" id="exampleModalLabel">Definición de Personal</h3>
         <button type="button" class="close" data-dismiss="modal" aria-label="Close">

          </button>
        </div>
            <!-- Modal body  -->
            <div class="modal-body">
              <div class="form-row">

                <input type="hidden" name="txtID" required value="<?php echo $txtID; ?>" id="txtID" placeholder="" require=>

                <div class="form-group col-md-4">
                  <label for="">Nombre</label>
                  <input type="text" class="form-control " name="txtNombre" value="<?php echo $txtNombre; ?>" id="txtNombre" placeholder="" require=>

                  <br>
                </div>

                <div class="form-group col-md-4">
                  <label for="">Apellido Paterno</label>
                  <input type="text" class="form-control " name="txtApellidoP" value="<?php echo $txtApellidoP; ?>" id="txtApellidoP" placeholder="" require=>


                  <br>
                </div>


                <div class="form-group col-md-4">
                  <label for="">Apellido Materno</label>

                  <input type="text" class="form-control " name="txtApellidoM" value="<?php echo $txtApellidoM; ?>" id="txtApellidoM" placeholder="" require=>
                  <div class="invalid-feedback">

                  </div>
                  <br>
                </div>


                <div class="form-group col-md-4">
                  <label for="">Cedula</label>
                  <input type="text" class="form-control " name="txtcedula" value="<?php echo $txtcedula; ?>" id="txtcedula" placeholder="" require=>


                  <br>
                </div>



                <div class="form-group col-md-4">
                  <label for="">Direccion</label>
                  <input type="text" class="form-control " name="txtdireccion" value="<?php echo $txtdireccion; ?>" id="txtdireccion" placeholder="" require=>
                  <br>
                </div>

                <div class="form-group col-md-4">
                  <label for="">Fecha de Nacimiento </label>
                  <input class="form-control" type="date" name="txtfecha_nacimiento" value="<?php echo $txtfecha_nacimiento; ?>" id="txtfecha_nacimiento" placeholder="" require=>

                  <br>
                </div>

                <div class="form-group col-md-4">
                  <label for="">Estado civil </label>
                  <select class="form-control" name="txtestado_civil" id="txtestado_civil">
                    <option value="<?php echo $txtestado_civil; ?>" <?php if ($txtestado_civil != "") echo "selected"; ?>><?php echo $txtestado_civil; ?></option>
                    <option value="Seleccione">-seleccione uno-</option>
                    <option value="Soltero">Soltero</option>
                    <option value="Casado">Casado</option>
                    <option value="Divorciado">Divorciado</option>
                    <option value="Viudo">Viudo</option>
                    <option value="Concubino">Concubino</option>
                  </select>
                </div>

                <div class="form-group col-md-4">
                  <label for="">Telefono</label>
                  <input type="text" class="form-control" name="txttelefono" value="<?php echo $txttelefono; ?>" id="txttelefono" placeholder="" require=>
                </div>


                <div class="form-group col-md-4">
                  <label for="">Telefono local</label>
                  <input type="text" class="form-control" name="txttelefonolocal" value="<?php echo $txttelefonolocal; ?>" id="txttelefonolocal" placeholder="" require=>
                </div>


                <div class="form-group col-md-12">
                  <label for="">Correo</label>
                  <input type="email" class="form-control" name="txtCorreo" required value="<?php echo $txtCorreo; ?>" id="txtCorreo" placeholder="" require=>
                  <br>
                </div>


                <div class="form-group col-md-4">
                  <label for="">Nacionalidad </label>
                  <select class="form-control" name="txtnacionalidad" id="txtnacionalidad">
                    <option value="<?php echo $txtnacionalidad ?>" <?php if ($txtnacionalidad != "") echo "selected"; ?>><?php echo $txtnacionalidad; ?></option>
                    <option value="Seleccione">-seleccione uno-</option>
                    <option value="Venezolano">Venezolano</option>
                    <option value="Extranjero">Extrajero</option>

                  </select>
                </div>

                <div class="form-group col-md-4">
                  <label for="">Género </label>
                  <select class="form-control" name="txtgenero" id="txtgenero">
                    <option value="<?php echo $txtgenero ?>" <?php if ($txtgenero != "") echo "selected"; ?>><?php echo $txtgenero; ?></option>
                    <option>-selecione uno-</option>
                    <option>Masculino</option>
                    <option>femenino</option>

                  </select>
                </div>

                <div class="form-group col-md-4">
                  <label for="">Pais</label>
                  <select class="form-control" name="txtpais" id="txtpais">
                    <?php require 'empleados/paises.php'; ?>
                </div>

                <div class="form-group col-md-4">
                  <label for="">Estado</label>
                  <select class="form-control" name="txtestado" id="txtestado">
                    <?php require 'empleados/estado.php'; ?>
                  </select>
                </div>

                <div class="form-group col-md-4">
                  <label for="">Municipio</label>
                  <select class="form-control" name="txtmunicipio" id="txtmunicipio">
                    <?php require 'empleados/municipio.php'; ?>
                </div>


                <div class="form-group col-md-6">
                  <label for="">Parroquia</label>
                  <select class="form-control" name="txtparroquia" id="txtparroquia">

                    <?php require 'empleados/parroquia.php'; ?>

                </div>




                <div class="form-group col-md-5">
                  <label for="">Foto</label>
                  <input type="file" class="form-control" accept="image/*" name="txtFoto" value="<?php echo $txtFoto; ?>" id="txtFoto" placeholder="" require=>
                  <br>
                </div>
              </div>
            </div>
            <div class="modal-footer">


              <button value="btnAgregar" type="submit" name="accion" class="btn btn-primary">Agregar</button>
              <button value="btnModificar" type="submit" name="accion" class="btn btn-success">Modificar</button>
              <button value="btnEliminar" type="submit" name="accion" class="btn btn-danger">Eliminar</button>
              <button value="btnCancelar" type="submit" name="accion" class="btn btn-light">Cancelar</button>
            </div>
          </div>
        </div>
      </div>


      <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
        Agregar Registro +
      </button>
      <!--  -->
      <!--  -->


      <!-- Button trigger modal -->
      <button type="button" class="btn btn-success" data-toggle="modal" data-target="#exampleModalLong">
        Ficha +
      </button>

      <!-- Modal -->
      <div class="modal fade" id="exampleModalLong" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLongTitle">Ficha del Personal</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">

              <?php
              
              $Nombre = $ApellidoP = $ApellidoM = $direccion = $fecha_nacimiento = $estado_civil = $telefono = $telefono_local = $Correo = $Nacionalidad = $Genero = $Pais = $Estado = $Municipio = $Parroquia = $Foto = "";
              if (isset($_POST['buscar'])) {
                require 'botones/btn_busqueda/buscar.1.php';
                
              }
              ?>
              <div class="form-group col-md-12">
                <p><strong>Cedula:</strong><?php echo "$txtcedula"; ?></p>
                <p><strong>Nombre Completo:</strong><?php echo "$txtNombre $txtApellidoP $txtApellidoM" ?></p>
                <p><strong>Direccion:</strong><?php echo "$txtdireccion" ?></p>
                <p><strong>Fecha de Nacimiento:</strong><?php echo "$txtfecha_nacimiento" ?></p>
                <p><strong>Telefono:</strong><?php echo "$txttelefono" ?></p>
                <p><strong>Correo:</strong><?php echo "$txtCorreo" ?></p>
                
              </div>
            </div>
            </div>
        </div>
      </div>





      <!--  #CODE..  TABLA DE CONSULTA  -->
      <table class="table table-hover table-bordered">
        <thead class="table-primary">
          <tr>
            <th scope="col">Foto</th>
            <th scope="col">Nombre Completo</th>
            <th scope="col">Cedula</th>
            <th scope="col">Direccion</th>
            <th scope="col">fecha de Nacimiento</th>
            <th scope="col">Estado civil</th>
            <th scope="col">Telefono</th>
            <th scope="col">Telefono Local</th>
            <th scope="col">Correo</th>
            <th scope="col">Nacionalidad</th>
            <th scope="col">Genero</th>
            <th scope="col">Pais</th>
            <th scope="col">Estado</th>
            <th scope="col">Municipio</th>
            <th scope="col">Parroquia</th>
            <th scope="col">Acciones</th>


          </tr>

        </thead>
        <tbody>
          <?php foreach ($listaEmpleados as $empleados1) { ?>
            <tr>
              <td><img class="img-thumbnail" width="100px" src="imagenes/foto.png" <?php echo $empleados1['Foto']; ?> /></td>
              <td><?php echo $empleados1['Nombre']; ?>
                <?php echo $empleados1['ApellidoP']; ?>
                <?php echo $empleados1['ApellidoM']; ?></td>
              <td> <?php echo $empleados1['cedula']; ?></td>
              <td> <?php echo $empleados1['direccion']; ?></td>
              <td> <?php echo $empleados1['fecha_nacimiento']; ?></td>
              <td> <?php echo $empleados1['estado_civil']; ?></td>
              <td> <?php echo $empleados1['telefono']; ?></td>
              <td> <?php echo $empleados1['telefono_local']; ?></td>
              <td> <?php echo $empleados1['Correo']; ?></td>
              <td> <?php echo $empleados1['Nacionalidad']; ?></td>
              <td> <?php echo $empleados1['Genero']; ?></td>
              <td> <?php echo $empleados1['Pais']; ?></td>
              <td> <?php echo $empleados1['Estado']; ?></td>
              <td> <?php echo $empleados1['Municipio']; ?></td>
              <td> <?php echo $empleados1['Parroquia']; ?></td>
              <td>

                <form action="" method="POST">
                  <input type="hidden" name="txtID" value="<?php echo $empleados1['ID']; ?>">
                  <input type="hidden" name="txtNombre" value="<?php echo $empleados1['Nombre']; ?>">
                  <input type="hidden" name="txtApellidoP" value="<?php echo $empleados1['ApellidoP']; ?>">
                  <input type="hidden" name="txtApellidoM" value="<?php echo $empleados1['ApellidoM']; ?>">
                  <input type="hidden" name="txtcedula" value="<?php echo $empleados1['cedula']; ?>">
                  <input type="hidden" name="txtdireccion" value="<?php echo $empleados1['direccion']; ?>">
                  <input type="hidden" name="txtfecha_nacimiento" value="<?php echo $empleados1['fecha_nacimiento']; ?>">
                  <input type="hidden" name="txtestado_civil" value="<?php echo $empleados1['estado_civil']; ?>">
                  <input type="hidden" name="txttelefono" value="<?php echo $empleados1['telefono']; ?>">
                  <input type="hidden" name="txttelefonolocal" value="<?php echo $empleados1['telefono_local']; ?>">
                  <input type="hidden" name="txtCorreo" value="<?php echo $empleados1['Correo']; ?>">
                  <input type="hidden" name="txtnacionalidad" value="<?php echo $empleados1['Nacionalidad']; ?>">
                  <input type="hidden" name="txtgenero" value="<?php echo $empleados1['Genero']; ?>">
                  <input type="hidden" name="txtpais" value="<?php echo $empleados1['Pais']; ?>">
                  <input type="hidden" name="txtestado" value="<?php echo $empleados1['Estado']; ?>">
                  <input type="hidden" name="txtmunicipio" value="<?php echo $empleados1['Municipio']; ?>">
                  <input type="hidden" name="txtparroquia" value="<?php echo $empleados1['Parroquia']; ?>">
                  <input type="hidden" name="txtFoto" value="<?php echo $empleados1['Foto']; ?>">

                  <input type="submit" value="Seleccionar" name="accion" class="btn btn-info">
                  <button value="btnEliminar" type="submit" name="accion" class="btn btn-danger">Eliminar</button>
                </form>


              </td>
            <?php } ?>

            </tr>

            <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
            <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
            <script src="js/main1.js"></script>
            <script src="js/jquery.min.js"></script>
            </nav>
    </header>
    </table>

</body>

</html>