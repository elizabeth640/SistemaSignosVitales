<?php
session_start();
include ('db.php');
include('privilegio.php');
if (permitirAcceso($_SESSION['usuarios'], 'admonConsultar')) {
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
        
        <div class="col-md-1"></div>
                               
              <div class="col-md-10" align="right"> 
                <button type="button" class="btn btn-secondary"><a href="inicioMedico.php"class="text-white" style="text-decoration:none">Regresar</a></button>
                <div class="row form-group text-center">
               
                <h3 class="lead" style="font-size: 30px">Signos vitales</h3>
                                    
            </div>           

            <section>
              <div class="container">
                <div class="row"> 
                  <div class="col-md-12">   
                    
                    <?php
                    include('db.php');
                    $sql= "SELECT Curp,NivelesOxigeno,RitmoCardiaco,CaloriasQuemadas,NumeroPasos,DistanciaRecorrida FROM consulta, paciente where consulta.paciente_idpaciente=paciente.idpaciente ";
                    $resultado = $conex->query($sql);
                    if ($resultado->num_rows>0) {
                      echo "<center>";
                      echo "<table class='table table-striped table-light text-center table-hover'>";
                      echo "<th style='vertical-align:middle;'><h5 class='lead' style='font-size: 17px'><b><b>Curp Paciente</b></b></h5></th>
                      <th style='vertical-align:middle;'><h5 class='lead' style='font-size: 17px'><b><b>NivelesOxigeno</b></b></h5></th>                    
                      <th style='vertical-align:middle;'><h5 class='lead' style='font-size: 17px'><b><b>RitmoCardiaco</b></b></h5></th>
                      <th style='vertical-align:middle;'><h5 class='lead' style='font-size: 17px'><b><b>CaloriasQuemadas</b></b></h5></th>
                      <th style='vertical-align:middle;'><h5 class='lead' style='font-size: 17px'><b><b>NumeroPasos</b></b></h5></th>
                      <th style='vertical-align:middle;'><h5 class='lead' style='font-size: 17px'><b><b>DistanciaRecorrida</b></b></h5></th>";


                      while ($fila=$resultado->fetch_assoc()) 
                      {
                        echo "<tr>";                                                        
                        echo "<td style='vertical-align:middle;'>".$fila['Curp']. "</td>";
                        echo "<td style='vertical-align:middle;'>".$fila['NivelesOxigeno']. "</td>";
                        echo "<td style='vertical-align:middle;'>".$fila['RitmoCardiaco']. "</td>";
                        echo "<td style='vertical-align:middle;'>".$fila['CaloriasQuemadas']. "</td>";
                        echo "<td style='vertical-align:middle;'>".$fila['NumeroPasos']. "</td>";
                        echo "<td style='vertical-align:middle;'>".$fila['DistanciaRecorrida']. "</td>";

                  
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