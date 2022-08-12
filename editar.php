<!DOCTYPE html>
<html>
<head>
    <title></title>
    <?php
      session_start();
      require("db.php");

    ?>
</head>
<body>

<select class="custom-select" name="SelectBanco" id="SelectBanco" required="">
<option disabled="disabled" value="" selected>Elegir...</option>
  <?php 

   $sql=mysqli_query($mysqli,"SELECT Curp,NivelesOxigeno,RitmoCardiaco,CaloriasQuemadas,NumeroPasos,DistanciaRecorrida FROM consulta, paciente where consulta.paciente_idpaciente=paciente.idpaciente;
");
        while($f=mysqli_fetch_assoc($sql)){    

            echo '<option value="'.$f['Curp'].'">'.$f['Curp'].'</option>';

   }

  ?>
</select>
</body>
</html>