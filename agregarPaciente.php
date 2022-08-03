<?php
session_start();
include ('db.php');
include('privilegio.php');
if (permitirAcceso($_SESSION['usuarios'], 'agregarPaciente')) {
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Wrist Tecnology</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="shortcut icon" type="image/png" href="img/favicon.ico">
 <!--  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">-->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>

<nav class="navbar navbar-expand-md navbar-dark bg-dark fixed-top "><!--info -->
  <div class="container-fluid ">
    <a class="navbar-brand " href="#">
      <img src="img/logo.png" alt="logo" style="width:40px;"> Wrist Tecnology </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link " aria-current="page" href="inicioMedico.php">Inicio</a>
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
 <div class="container">
      <div class="row justify-content-center mt-5 pt-5 ">
        <div class="col-md-12">
          <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
              <li class="breadcrumb-item" aria-current="page">Registro</li>
              <li class="breadcrumb-item active"><a href="Antecedentes.php">Antecedentes</a></li>
            </ol>
         </nav>
        </div>
        <div class="col-md-7">
          <h1 class="display-8">Registro de Pacientes</h1>
          <hr class="bg-info">
          <!--<p class="pb-0 mb-0">Te invitamos a contactarnos, te respoderemos a la brevedad.</p>
          <p class="text-danger small pt-0 mt-0">"Todos los campos son obligatorios"</p>-->
          <form action="metodoUsuario.php" method="post">
          	<input type="hidden" name="opcion" value="2">
            <div class="row form-group">
              <label for="curp" class="col-form-label col-md-4">Curp:</label> 
              <div class="col-md-8">
                <input type="text" name="curp" class="form-control" >
              </div>
            </div>
            <div class="row form-group">
              <label for="nombre" class="col-form-label col-md-4">Nombre Completo:</label> 
              <div class="col-md-8">
                <input type="text" name="nombre" class="form-control" required pattern="[A-Za-záéíóúÁÉÍÓÚ ]+">
              </div>
            </div>
            <div class="row form-group">
              <label for="edad" class="col-form-label col-md-4">Edad:</label>  
              <div class="col-md-8">
               <input type="number" name="edad" class="form-control" required max="99">
              </div>
            </div>
            <div class="row form-group">
              <label for="fechaNacimiento" class="col-form-label col-md-4">Fecha de nacimiento:</label> 
              <div class="col-md-8">
                <input type="date" name="fechaNacimiento" class="form-control" required >
              </div>
            </div>
            <div class="row form-group">
              <label for="domicilio" class="col-form-label col-md-4">Domicilio:</label> 
              <div class="col-md-8">
                <input type="text" name="domicilio" class="form-control" required >
              </div>
            </div>
            <div class="row form-group">
              <label for="sexo" class="col-form-label col-md-4">Sexo:</label>  
              <div class="col-md-8">
               <label><input type="radio" name="sexo" value="F">&nbsp;Femenino</label>&nbsp;&nbsp;
                <label><input type="radio" name="sexo" value="M">&nbsp;Masculino</label>&nbsp;&nbsp;
              </div>
            </div>
            <div class="row form-group">
              <label for="estadoCivil" class="col-form-label col-md-4">Estado Civil:</label>  
              <div class="col-md-8">
               <label><input type="radio" name="estadoCivil" value="Casada/o">&nbsp;Casado(a)</label>&nbsp;&nbsp;
                <label><input type="radio" name="estadoCivil" value="Soltero/a">&nbsp;Soltero(a)</label>&nbsp;&nbsp;
              </div>
            </div>
            <div class="row form-group">
              <label for="ocupacion" class="col-form-label col-md-4">Ocupacion:</label> 
              <div class="col-md-8">
                <input type="text" name="ocupacion" class="form-control" >
              </div>
            </div>
            <div class="row form-group">
              <label for="cel" class="col-form-label col-md-4">Numero de Cel:</label> 
              <div class="col-md-8">
               <input type="number" name="cel" class="form-control" >
              </div>
            </div>
            <div class="row form-group">
              <label for="tel" class="col-form-label col-md-4">Numero de Tel:</label>   
              <div class="col-md-8">
               <input type="number" name="tel" class="form-control">
              </div>
            </div>
            <div class="row form-group">
              <label for="estatura" class="col-form-label col-md-4">Estatura:</label> 
              <div class="col-md-8">
               <input type="height" name="estatura" class="form-control">
              </div>
            </div>
            <div class="row form-group">
              <label for="peso" class="col-form-label col-md-4">Peso:</label>   
              <div class="col-md-8">
                <input type="number" name="peso" class="form-control">
              </div>
            </div>
            <div class="row form-group">
              <label for="medico" class="col-form-label col-md-4">Medico a cargo:</label> 
              <div class="col-md-8">
               <?php
                  include ('db.php');
                  $ejemplo = "SELECT nombrecompleto FROM `usuarios` WHERE TipoUsuario= 'Medico'";
                  $res = $conex->query($ejemplo);
                  if ($res) {
                    echo "<select class='form-control' name='medico'>";
                    echo "<option value=''>-Elige el nombre del medico a cargo-</option>";
                    while ($fila = $res->fetch_array()) {
                      echo "<option value='".$fila[0]."'>".$fila[0]."</option>";
                    }

                    echo "</select>";
                  } 

                  ?> 
              </div>
            </div>
            <div class="row form-group">
              <label for="fechaAlta" class="col-form-label col-md-4">Fecha de alta en el sistema:</label>
              <div class="col-md-8">
               <input type="date" name="fechaAlta" class="form-control" required>
              </div>
            </div>
            <div class="col-md-12" align="right">
            <input type="submit" value="Continuar" name="continuar" class="btn btn-success"></input>
            <input type="reset" value="Limpiar" class="btn btn-primary">
       		 </div>
          </form>
        </div>
      </div>
    </div>
<br><br>
    <?php
      }
      else
        header('Location:login.php');
    ?>

<!-- Footer -->
<footer class="text-center footer-style page-footer font-small bg-dark">
    <div class="container"><br>
        <div class="row">
            <div class="col-md-4 footer-col text-white">
                <h5 class="text-white">Dirección</h5>
                <p>
                    Camino, Real San Mateo S/N, 74169 Santa Ana Xalmimilulco,Pue. 
                </p>
            </div>
            <div class="col-md-4 footer-col text-white">
              <div class="sociales">
                <h5>Redes Sociales</h5>
                        <a  target="_blank" href="#" class="facebook"><i style="color:white;" class="fa fa-fw fa-facebook fa-2x"></i></a>
                        <a  target="_blank" href="#" class="google"><i style="color:white;" class="fa fa-fw fa-google-plus fa-2x"></i></a>
                        <a  target="_blank" href="#" class="twiter"><i style="color:white;" class="fa fa-fw fa-twitter fa-2x"></i></a>
                        <a  target="_blank" href="#" class="whatsapp"><i style="color:white;" class="fa fa-fw fa-whatsapp fa-2x"></i></a>
                        <a  target="_blank" href="#" class="telegram"><i style="color:white;" class="fa fa-fw fa-telegram fa-2x"></i></a>
            </div></div>
            <div class="col-md-4 footer-col text-white">
                <h5>Mas informacion de la compañia</h5>
                <a href="" class="text-white">WristTecnology.com</a>
            </div>
        </div>
    </div>
</footer>
<!-- Footer -->
</body>
</html>
