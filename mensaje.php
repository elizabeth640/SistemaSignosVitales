<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">

  <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>

    <?php

      function mensaje($mensaje, $mensaje2, $pagina){
        
        echo " <script>
        $(document).ready(function(){
          $('#miModal').modal('show'); });
          </script>";
        

        echo "
        <!-- The Modal -->
        <div class='modal fade' id='miModal'>
        <div class='modal-dialog modal-sm'>
        <div class='modal-content'>

        <!-- Modal Header -->
        <div class='modal-header'>
        <h4 class='modal-title lead' style='font-size: 25px'>".$mensaje."</h4>
        
        </div>

        <!-- Modal body -->
        <div class='modal-body'>
        <p class='lead'style='font-size: 15px'> ".$mensaje2."</p>
        <div aling='center'>
        <button type='button' class='btn btn-info' data-dismiss='modal' onclick='regresarPaginaAnterior()'>Cerrar</button>
        </div>
        </div>


        </div>
        </div>
        </div>

        </div>
        

        <script>
        function regresarPaginaAnterior(){
          window.open('".$pagina."','_self');
        }
        </script>


        ";
      }
    ?>