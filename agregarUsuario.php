<?php
session_start();
include ('db.php');
include('privilegio.php');
if (permitirAcceso($_SESSION['usuarios'], 'agregarUsuario')) {
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
          <a class="nav-link " aria-current="page" href="inicioAdmon.php">Inicio</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Servicios</a>
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
        <div class="col-md-7">
          <h1 class="display-8">Agregar usuario</h1>
          <hr class="bg-info">
          <!--<p class="pb-0 mb-0">Te invitamos a contactarnos, te respoderemos a la brevedad.</p>
          <p class="text-danger small pt-0 mt-0">"Todos los campos son obligatorios"</p>-->
          <form action="metodoUsuario.php" method="post">
          	<input type="hidden" name="opcion" value="1">
            <div class="row form-group">
              <label for="nombre" class="col-form-label col-md-4">Nombre Completo:</label> 
              <div class="col-md-8">
                <input type="text" name="nombre" class="form-control" required pattern="[A-Za-záéíóúÁÉÍÓÚ ]+"placeholder="Nombre Completo">
              </div>
            </div>
            <div class="row form-group">
              <label for="cedula" class="col-form-label col-md-4">Cedula Profesional:</label> 
              <div class="col-md-8">
                <input type="text" name="cedula" class="form-control" required >
              </div>
            </div>
            <div class="row form-group">
              <label for="edad" class="col-form-label col-md-4">Edad:</label>  
              <div class="col-md-8">
               <input type="number" name="edad" class="form-control" required max="99">
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
              <label for="especialidad" class="col-form-label col-md-4">Especialidad:</label> 
              <div class="col-md-8">
               <input type="text" name="especialidad" class="form-control" required>
              </div>
            </div>
            <div class="row form-group">
              <label for="correo" class="col-form-label col-md-4">Correo electronico:</label>   
              <div class="col-md-8">
                <input type="text" name="correo" class="form-control" required>
              </div>
            </div>
            <div class="row form-group">
              <label for="user" class="col-form-label col-md-4">Usuario:</label> 
              <div class="col-md-8">
               <input type="text" name="user" class="form-control" required pattern="[A-Za-z0-9]+">
              </div>
            </div>
            <div class="row form-group">
              <label for="pass" class="col-form-label col-md-4">Contraseña:</label> 
              <div class="col-md-8">
               <input type="password" name="pass" class="form-control" required maxlength="10" minlength="6">
              </div>
            </div>
            <div class="row form-group">
              <label for="tipo" class="col-form-label col-md-4">Tipo de Usuario:</label>  
              <div class="col-md-8">
               <label><input type="radio" name="tipo" value="Administrador">&nbsp;Administrador</label>&nbsp;&nbsp;
                <label><input type="radio" name="tipo" value="Medico">&nbsp;Medico</label>&nbsp;&nbsp;
              </div>
            </div>
            <div class="row form-group">
              <label for="fecha" class="col-form-label col-md-4">Fecha de alta en el sistema:</label>
              <div class="col-md-8">
               <input type="date" name="fecha" class="form-control">
              </div>
            </div>
            <div class="col-md-12" align="right">
            <input type="submit" value="Guardar" name="guardar" class="btn btn-success"></input>
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
<footer class="page-footer font-small bg-dark">

  <!-- Copyright -->
  <div class="footer-copyright text-center text-white py-3">© 2022 Copyright:
    <a href="" class="text-white">WristTecnology.com</a>
  </div>
  <!-- Copyright -->

</footer>
<!-- Footer -->
</body>
</html>
