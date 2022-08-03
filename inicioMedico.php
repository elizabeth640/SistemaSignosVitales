<?php
session_start();
include ('db.php');
include('privilegio.php');
if (permitirAcceso($_SESSION['usuarios'], 'inicioMedico')) {
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

  <br><br><br>

<div>
 <div class="container">
  <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
      <ol class="carousel-indicators">
        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
      </ol>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img class="d-block w-100" src="img/frase.jpg" style="width:50%;" "height: 50%;">
      </div>
      <div class="carousel-item">
        <img class="d-block w-100" src="img/frase1.jpg" style="width:50%;" "height: 50%;">
      </div>
      <div class="carousel-item">
        <img class="d-block w-100" src="img/frase2.jpg" style="width:50%;" "height: 50%;">
      </div>
    </div>
    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
      <div class="row justify-content-center mt-5 pt-5 ">
        <div class="col-md-12">
          <hr class="bg-info">
          <h5 class="display-5 text-center my-3"><b>¿Que operacion desea realizar?</b></h5><a name="servicios"></a><br>
        <div class="row">
          <div class="col-md-4">
            <div class="card border-info mb-3">
              <div class="card-body text-dark" align="center">
                <h5 class="card-title lead text-center" style="font-size: 20px">Registrar Pacientes</h5>
                <p class="card-text lead" style="font-size: 15px">Ingresar nuevos pacientes al sistema.</p>
                <a href="agregarPaciente.php" class="btn btn-info" >Agregar</a>
              </div>
            </div>
          </div>

          <div class="col-md-4">
            <div class="card border-info mb-3">
              <div class="card-body text-dark" align="center">
                <h5 class="card-title lead text-center" style="font-size: 20px">Consultar Pacientes</h5>
                <p class="card-text lead" style="font-size: 15px">Consulta los datos de los pacientes.</p>
                <a href="consultarPaciente.php" class="btn btn-info" >Buscar</a>
              </div>
            </div>
          </div>

          <div class="col-md-4">
            <div class="card border-info mb-3">
              <div class="card-body text-dark" align="center">
                <h5 class="card-title lead text-center" style="font-size: 20px">Edita y/o Elimina Usuarios</h5>
                <p class="card-text lead" style="font-size: 15px">Modifica y/o elimina a usuarios</p>
                <a href="admonPaciente.php" class="btn btn-info" >Editar</a>
              </div>
            </div>
          </div>
        </div>
        <br>
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