<?php

session_start();

session_destroy();
/*el HEADER es considerado tambien un metodo de seguridad debido que te redireciona a la pagina de inicio */
header('Location:index.php');




?>
