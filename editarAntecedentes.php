<?php
session_start();
include ('db.php');
include('privilegio.php');
if (permitirAcceso($_SESSION['usuarios'], 'editarAntecedentes')) {
?>
<?php 
    include("db.php");
$id=$_GET['paciente_idpaciente'];
$sql="SELECT * FROM antecedentes where paciente_idpaciente='$id'";
$query=mysqli_query($conex,$sql);

$fila=mysqli_fetch_array($query);
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Wrist Technology</title>
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
      <img src="img/logo.png" alt="logo" style="width:40px;"> Wrist Technology</a>
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
        <div class="col-md-7">
          <h1 class="display-8">Modificar paciente</h1>
          <hr class="bg-info">
          <!--<p class="pb-0 mb-0">Te invitamos a contactarnos, te respoderemos a la brevedad.</p>
          <p class="text-danger small pt-0 mt-0">"Todos los campos son obligatorios"</p>-->
          <form action="metodoUsuario.php" method="post" name="actualizar">
          	<input type="hidden" name="opcion" value="8">
            <input type="hidden" name="nombreU" value="<?php echo $fila['paciente_idpaciente'] ?>">
            <div class="row form-group">
              <label for="idpaciente" class="col-form-label col-md-4">idPaciente:</label> 
              <div class="col-md-8">
                <?php
                  include ('db.php');
                  $ejemplo = "SELECT * FROM `antecedentes` where paciente_idpaciente='paciente_idpaciente'";
                  $res = $conex->query($ejemplo);
                  if ($res) {
                    echo "<select class='form-control' name='idpaciente'>";
                    echo "<option value='".$fila['paciente_idpaciente']."'>".$fila['paciente_idpaciente']."</option>";
                    while ($fila = $res->fetch_array()) {
                      echo "<option value='".$fila[0]."'>".$fila[0]."</option>";
                    }

                    echo "</select>";
                  } 

                  ?> 
              </div>
            </div>
            <div class="row form-group">
              <label for="alcohol" class="col-form-label col-md-4">Alcohol:</label> 
              <div class="col-md-8">
                <label><input type="radio" name="alcohol" value="Ocasionalmente">&nbsp;Ocasionalmente</label>&nbsp;&nbsp;
                <label><input type="radio" name="alcohol" value="Frecuentemente">&nbsp;Frecuentemente</label>&nbsp;&nbsp;
                <label><input type="radio" name="alcohol" value="Rara Vez">&nbsp;Rara Vez</label>&nbsp;&nbsp;
              </div>
            </div>
            <div class="row form-group">
              <label for="tabaco" class="col-form-label col-md-4">Tabaco:</label>  
              <div class="col-md-8">
               <label><input type="radio" name="tabaco" value="Si">&nbsp;Si</label>&nbsp;&nbsp;
                <label><input type="radio" name="tabaco" value="No">&nbsp;No</label>&nbsp;&nbsp;
              </div>
            </div>
            <div class="row form-group">
              <label for="drogas" class="col-form-label col-md-4">Drogas:</label>  
              <div class="col-md-8">
               <label><input type="radio" name="drogas" value="Si">&nbsp;Si</label>&nbsp;&nbsp;
                <label><input type="radio" name="drogas" value="No">&nbsp;No</label>&nbsp;&nbsp;
              </div>
            </div>
            <div class="row form-group">
              <label for="alimentacion" class="col-form-label col-md-4">Tipo de alimentacion:</label> 
              <div class="col-md-8">
                <label><input type="radio" name="alimentacion" value="Sana">&nbsp;Sana</label>&nbsp;&nbsp;
                <label><input type="radio" name="alimentacion" value="Normal">&nbsp;Normal</label>&nbsp;&nbsp;
                <label><input type="radio" name="alimentacion" value="Iregular">&nbsp;Iregular</label>&nbsp;&nbsp;
                <label><input type="radio" name="alimentacion" value="Mala">&nbsp;Mala</label>&nbsp;&nbsp;
              </div>
            </div>
            <div class="row form-group">
              <label for="dipsia" class="col-form-label col-md-4">Dipsia:</label>  
              <div class="col-md-8">
               <label><input type="radio" name="dipsia" value="Si">&nbsp;Si</label>&nbsp;&nbsp;
                <label><input type="radio" name="dipsia" value="No">&nbsp;No</label>&nbsp;&nbsp;
              </div>
            </div>
            <div class="row form-group">
              <label for="gemelar" class="col-form-label col-md-4">Gemelar:</label>  
              <div class="col-md-8">
               <label><input type="radio" name="gemelar" value="Si">&nbsp;Si</label>&nbsp;&nbsp;
                <label><input type="radio" name="gemelar" value="No">&nbsp;No</label>&nbsp;&nbsp;
              </div>
            </div>
            <div class="row form-group">
              <label for="enfermedades" class="col-form-label col-md-4">Enfermedades heriditarias:</label> 
              <div class="col-md-8">
                <input type="text" name="enfermedades" class="form-control" value="<?php echo $fila['EnfermedadesHereditarias'] ?>">
              </div>
            </div>
            <div class="row form-group">
              <label for="alergias" class="col-form-label col-md-4">Alergias:</label>  
              <div class="col-md-8">
               <input type="text" name="alergias" class="form-control" value="<?php echo $fila['Alergias'] ?>">
              </div>
            </div>
            <div class="row form-group">
              <label for="anticonceptivos" class="col-form-label col-md-4">Anticonceptivos:</label>  
              <div class="col-md-8">
               <input type="text" name="anticonceptivos" class="form-control" value="<?php echo $fila['Anticonceptivos'] ?>">
              </div>
            </div>
            <div class="row form-group">
              <label for="sangre" class="col-form-label col-md-4">Tipo de sangre:</label>  
              <div class="col-md-8">
               <input type="text" name="sangre" class="form-control" value="<?php echo $fila['TipoSangre'] ?>">
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
                        <a  target="_blank" href="https://es-la.facebook.com/" class="facebook"><i style="color:white;" class="fa fa-fw fa-facebook fa-2x"></i></a>
                        <a  target="_blank" href="https://www.google.com/intl/es-419/gmail/about/" class="google"><i style="color:white;" class="fa fa-fw fa-google-plus fa-2x"></i></a>
                        <a  target="_blank" href="https://twitter.com/?lang=es" class="twiter"><i style="color:white;" class="fa fa-fw fa-twitter fa-2x"></i></a>
                        <a  target="_blank" href="https://www.whatsapp.com/?lang=es" class="whatsapp"><i style="color:white;" class="fa fa-fw fa-whatsapp fa-2x"></i></a>
                        <a  target="_blank" href="https://web.telegram.org/z/" class="telegram"><i style="color:white;" class="fa fa-fw fa-telegram fa-2x"></i></a>
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
