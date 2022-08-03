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
          <a class="nav-link" aria-current="page" href="index.php">Inicio</a>
        </li>
       <li class="nav-item">
          <a class="nav-link" href="index.php#somos">Nosotros</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" href="http://localhost/WristTecnology/sesion.php">Login</a>
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
    <div class="col-lg-6">
      <img src="img/doctor.png" width="500" height="400"><br><br><br>
     <center><h4>Tu salud es lo primero</h4></center/>
    </div>
    <div class="col-lg-6" >
      <form action="metodoUsuario.php" method="post">
        <input type="hidden" name="opcion" value="4">
        <br><br><br>
        <h3>Iniciar sesión</h3><br>
         <div class="mb-3">
         <label for="usuario" class="form-label">Usuario:</label>  
        <input type="text" name="usuario" class="form-control">
        </div>
        <div class="mb-3">
        <label for="contraseña" class="form-label">Contraseña:</label>
        <input type="password" name="contraseña" class="form-control">
        </div>
        <input type="hidden" name="enviar_hdn" value="post" />
        <center>
         <input class="btn btn-secondary" type="submit" name="enviar" value="Ingresar">

          <!--<a href="./restablecer.php">Olvidé mi contraseña</a> <br><br>-->
        </center>
      </form>
    </div>
  </div>
</div>
<br><br>
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
