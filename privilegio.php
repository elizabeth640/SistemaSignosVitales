<?php

function permitirAcceso($tipo,$formulario){
	include('db.php');
	$prueba = "SELECT * FROM `privilegio` WHERE `tipoUsuario`='$tipo' AND `formulario`='$formulario' ";
	$result = $conex-> query($prueba);
	if ($result->num_rows >0)
	return true;
	else
	return false;		
		
	}

	?>