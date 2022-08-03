<?php
session_start();
include ('db.php');
include('privilegio.php');
if (permitirAcceso($_SESSION['usuarios'], 'inicioAdmon')) {
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
        <!--<li class="nav-item">
          <a class="nav-link" href="#">Servicios</a>
        </li>-->
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
          
          <!--<p class="pb-0 mb-0">Te invitamos a contactarnos, te respoderemos a la brevedad.</p>
          <p class="text-danger small pt-0 mt-0">"Todos los campos son obligatorios"</p>-->
          <h1 align="center" class="display-4">Bienvenido Administrador</h1>
          <p align="center" class="lead">Como administrador puedes realizar cambios en los datos, dar de alta y eliminar a usuarios.</p>
          <br>
          <hr class="bg-info">

          <br><br>

        <div class="row">
          <div class="col-md-6">
            <div class="card border-info mb-3">
              <div class="card-body text-dark" align="center">
                <h5 class="card-title lead text-center" style="font-size: 20px">Registrar Usuario</h5>
                <p class="card-text lead" style="font-size: 15px">Ingresar nuevos usuarios al sistema.</p>
                <a href="agregarUsuario.php" class="btn btn-info" >Agregar</a>
              </div>
            </div>
          </div>

          <div class="col-md-6">
            <div class="card border-info mb-3">
              <div class="card-body text-dark" align="center">
                <h5 class="card-title lead text-center" style="font-size: 20px">Edita y/o Elimina Usuarios</h5>
                <p class="card-text lead" style="font-size: 15px">Modifica y/o elimina a usuarios</p>
                <a href="admonUsuario.php" class="btn btn-info" >Editar</a>
              </div>
            </div>
          </div>
        </div>
        <br>
        </div>
      </div>
 </div>
<br><br><br><br>
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
