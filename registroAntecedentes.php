<?php
session_start();
foreach ($_POST as $clave => $valor) {
$_SESSION['sesionagregarPaciente'][$clave] = $valor;
}
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
          <a class="nav-link " aria-current="page" href="http://localhost/WristTecnology/index.php">Inicio</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Servicios</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" href="http://localhost/WristTecnology/sesion2.php">Inicio Sesion</a>
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
    <nav aria-label="breadcrumb">
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="http://localhost/WristTecnology/agregarPaciente.php">Registro</a></li>
        <li class="breadcrumb-item active" aria-current="page">Antecedentes</li>
      </ol>
    </nav>
</div>
<div class="container">
  <div class="row justify-content-md-center">
     <form class="col-6" action="metodoUsuario.php" method="post">
      <input type="hidden" name="opcion" value="2">
        <hgroup><h2>Registro de Pacientes</h2></hgroup>
        <div class="mb-3">
         <label for="alcohol" class="form-label">Alcohol:</label>  
        <div class="col-md-9">
                <label><input type="radio" name="alcohol" value="F">&nbsp;Ocasionalmente</label>&nbsp;&nbsp;
                <label><input type="radio" name="alcohol" value="M">&nbsp;Frecuentemente</label>&nbsp;&nbsp;
                <label><input type="radio" name="alcohol" value="M">&nbsp;Rara Vez</label>&nbsp;&nbsp;
              </div>
        </div>
        <div class="mb-3">
         <label for="tabaco" class="form-label">Tabaco:</label>  
        <div class="col-md-9">
                <label><input type="radio" name="tabaco" value="F">&nbsp;Si</label>&nbsp;&nbsp;
                <label><input type="radio" name="tabaco" value="M">&nbsp;No</label>&nbsp;&nbsp;
              </div>
        </div>
        <div class="mb-3">
         <label for="drogas" class="form-label">Drogas:</label>  
        <div class="col-md-9">
                <label><input type="radio" name="drogas" value="F">&nbsp;Si</label>&nbsp;&nbsp;
                <label><input type="radio" name="drogas" value="M">&nbsp;No</label>&nbsp;&nbsp;
              </div>
        </div>
        <div class="mb-3">
         <label for="alimentacion" class="form-label">Alimentacion:</label>  
        <div class="col-md-9">
                <label><input type="radio" name="alimentacion" value="F">&nbsp;Sana</label>&nbsp;&nbsp;
                <label><input type="radio" name="alimentacion" value="M">&nbsp;Normal</label>&nbsp;&nbsp;
                <label><input type="radio" name="alimentacion" value="M">&nbsp;Iregular</label>&nbsp;&nbsp;
                <label><input type="radio" name="alimentacion" value="M">&nbsp;Mala</label>&nbsp;&nbsp;
              </div>
        </div>
        <div class="mb-3">
         <label for="dipsia" class="form-label">Dipsia:</label>  
        <div class="col-md-9">
                <label><input type="radio" name="dipsia" value="F">&nbsp;Si</label>&nbsp;&nbsp;
                <label><input type="radio" name="dipsia" value="M">&nbsp;No</label>&nbsp;&nbsp;
              </div>
        </div>
        <div class="mb-3">
         <label for="gemelar" class="form-label">Gemelar:</label>  
        <div class="col-md-9">
                <label><input type="radio" name="gemelar" value="F">&nbsp;Si</label>&nbsp;&nbsp;
                <label><input type="radio" name="gemelar" value="M">&nbsp;No</label>&nbsp;&nbsp;
              </div>
        </div>
        <div class="mb-3">
         <label for="enfermedades" class="form-label">Enfermedades heriditarias:</label>  
        <input type="text" name="enfermedades" class="form-control">
        </div>
        <div class="mb-3">
         <label for="alergias" class="form-label">Alergias:</label>  
        <input type="text" name="alergias" class="form-control">
        </div>
        <div class="mb-3">
         <label for="anticonceptivos" class="form-label">Anticonceptivos:</label>  
        <input type="text" name="anticonceptivos" class="form-control">
        </div>
        <div class="mb-3">
         <label for="sangre" class="form-label">Tipo de sangre:</label>  
        <input type="height" name="sangre" class="form-control">
        </div>
        <input type="submit" value="Enviar" name="enviar" class="btn btn-success"></input> <input type="reset" value="Limpiar" class="btn btn-primary">
        <button type="button" class="btn btn-secondary"><a href="agregarPaciente.php"class="text-white" style="text-decoration:none">Regresar</a></button>
    </form>
    </div>
</div>
<br><br>
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
