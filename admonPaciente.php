<?php
session_start();
include ('db.php');
include('privilegio.php');
if (permitirAcceso($_SESSION['usuarios'], 'admonPaciente')) {
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Wrist Technology</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="shortcut icon" type="image/png" href="img/favicon.ico">
  <!-- Bootstrap CSS -->
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
 <!--  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">-->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">

  <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>

<nav class="navbar navbar-expand-md navbar-dark bg-dark fixed-top "><!--info -->
  <div class="container-fluid ">
    <a class="navbar-brand " href="#">
      <img src="img/logo.png" alt="logo" style="width:40px;"> Wrist Technology </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link " aria-current="page" href="inicioAdmon.php">Inicio</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="inicioMedico.php#servicios">Servicios</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" href="cerrarSesion.php">Cerrar Sesion</a>
        </li>
        <!--<li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Dropdown
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="#">1</a></li>
            <li><a class="dropdown-item" href="#">Another action</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="#">Something else here</a></li>
          </ul>
        </li>
        <li class="nav-item">
          <a class="nav-link disabled">Disabled</a>
        </li>-->
      </ul>
    </div>
  </div>
</nav>
<br><br><br>
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
              <li class="breadcrumb-item" aria-current="page">Registro</li>
              <li class="breadcrumb-item active"><a href="admonAntecedentes.php">Antecedentes</a></li>
            </ol>
         </nav>
        </div>
        <div class="col-md-1"></div>
                               
              <div class="col-md-10" align="right"> 
                <button type="button" class="btn btn-secondary"><a href="inicioMedico.php"class="text-white" style="text-decoration:none">Regresar</a></button>
                <div class="row form-group text-center">
               
                <h3 class="lead" style="font-size: 30px">Usuarios existentes en el sistema</h3>
                                    
            </div>           

            <section>
              <div class="container">
                <div class="row"> 
                  <div class="col-md-12">   
                    
                    <?php
                    include('db.php');
                    $sql= "select Curp,NombreCompleto,Edad,Domicilio from paciente";
                    $resultado = $conex->query($sql);

                    if ($resultado->num_rows>0) {
                      echo "<center>";
                      echo "<table class='table table-striped table-light text-center table-hover'>";
                      echo "<th style='vertical-align:middle;'><h5 class='lead' style='font-size: 17px'><b><b>Curp</b></b></h5></th>
                      <th style='vertical-align:middle;'><h5 class='lead' style='font-size: 17px'><b><b>Nombre completo</b></b></h5></th>                    
                      <th style='vertical-align:middle;'><h5 class='lead' style='font-size: 17px'><b><b>Edad</b></b></h5></th>
                      <th style='vertical-align:middle;'><h5 class='lead' style='font-size: 17px'><b><b>Domicilio</b></b></h5></th>
                      <th style='vertical-align:middle;'><h5 class='lead' style='font-size: 17px'><b><b>Editar</b></b></h5></th>                    
                      <th style='vertical-align:middle;'><h5 class='lead' style='font-size: 17px'><b><b>Eliminar</b></b></h5></th>";


                      while ($fila=$resultado->fetch_assoc()) 
                      {
                        echo "<tr>";                                                        
                        echo "<td style='vertical-align:middle;'>".$fila['Curp']. "</td>";
                        echo "<td style='vertical-align:middle;'>".$fila['NombreCompleto']. "</td>";
                        echo "<td style='vertical-align:middle;'>".$fila['Edad']. "</td>";
                        echo "<td style='vertical-align:middle;'>".$fila['Domicilio']. "</td>";

                        
                     /** EDITAR **/
                     echo "<td style='vertical-align:middle;'> <a href='editarPaciente.php?Curp=". $fila['Curp']."'><i class='fas fa-pencil-alt'style='color:success;'></i></a></td>";
                     /** ELIMINAR  **/
                     echo "<td style='vertical-align:middle;'> <a href='metodoUsuario.php?opcion=9&Curp=".$fila['Curp']."'> <i class='fas fa-trash-alt'style='color:red;'></i></a></td>"; 
                   }
                   echo "</center>";
                 }
                 ?>
               </div>
             </div>
           </div>
         </section>

    
<br><br>
    <?php
      }
      else
        header('Location:login.php');
    ?>

  </body>
</html>