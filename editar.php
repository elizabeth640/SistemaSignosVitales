<?php 
    include("db.php");
   

    $sql="SELECT *  FROM usuarios";
    $query=mysqli_query($conex,$sql);
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title> PAGINA ALUMNO</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/style.css" rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
        
    </head>
    <body>
            <div class="container ">
                    <div class="row"> 
                        

                        <div class="col-md-8">
                            <table class="table" >
                                <thead class="table-success table-striped" >
                                    <tr>
                                        <th>Nombre Completo</th>
                                        <th>Cedula Profesional</th>
                                        <th>Edad</th>
                                        <th>Cel</th>
                                        <th>Especialidad</th>
                                        <th>Correo</th>
                                        <th>TipoUsuario</th>
                                        <th></th>
                                        <th></th>
                                    </tr>
                                </thead>

                                <tbody>
                                        <?php
                                            while($row=mysqli_fetch_array($query)){
                                        ?>
                                            <tr>
                                                <th><?php  echo $row['NombreCompleto']?></th>
                                                <th><?php  echo $row['CedulaProfesional']?></th>
                                                <th><?php  echo $row['Edad']?></th>  
                                                <th><?php  echo $row['Cel']?></th>   
                                                <th><?php  echo $row['Especialidad']?></th>   
                                                <th><?php  echo $row['Correo']?></th>   
                                                <th><?php  echo $row['TipoUsuario']?></th> 
                                                <th><?php  echo $row['FechaAltaSistema']?></th>   
                                                <th><a href="actualizar.php?id=<?php echo $row['CedulaProfesional'] ?>" class="btn btn-info">Editar</a></th>
                                                <th><a href="delete.php?id=<?php echo $row['CedulaProfesional'] ?>" class="btn btn-danger">Eliminar</a></th>                                        
                                            </tr>
                                        <?php 
                                            }
                                        ?>
                                </tbody>
                            </table>
                        </div>
                    </div>  
            </div>
    </body>
</html>