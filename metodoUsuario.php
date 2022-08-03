<?php

include ('db.php');
include ('mensaje.php');


$opcion = $_REQUEST['opcion'];

switch ($opcion) {
	case 1:
	$nombre = $_REQUEST['nombre'];
	$cedula = $_REQUEST['cedula'];
	$edad = $_REQUEST['edad'];
	$sexo = $_REQUEST['sexo'];
		  $cel = $_REQUEST['cel'];
		  $tel = $_REQUEST['tel'];
		  $especialidad = $_REQUEST['especialidad'];
		  $correo = $_REQUEST['correo'];
		  $user = $_REQUEST['user'];
		  $pass = $_REQUEST['pass'];
		  $TipoUsuario = $_REQUEST['tipo'];
		  $FechaAlta = $_REQUEST['fecha'];
		  $pass = md5($pass);

	$sql="INSERT INTO Usuarios (idusuario,NombreCompleto,CedulaProfesional,Edad, Sexo,Cel,Tel,Especialidad,Correo,Usuario,Contraseña,TipoUsuario,FechaAltaSistema) VALUES('','$nombre','$cedula','$edad','$sexo','$cel','$tel','$especialidad','$correo','$user','$pass','$TipoUsuario','$FechaAlta')";
	
		$resultado = $conex->query($sql);
		if ($resultado) {
			mensaje('Usuario Registrado','Ahora puedes visualizarlo en la tabla de Usuarios','admonUsuario.php');						
		}
		else{
			mensaje("Error al Registrar", "Vuelve a intentarlo ", "agregarUsuario.php");			
		}
		break;
        
	case 2:
	$Curp = $_REQUEST['curp'];
	$Nombre = $_REQUEST['nombre'];
	$Edad = $_REQUEST['edad'];
	$FechaNacimiento = $_REQUEST['fechaNacimiento'];
	$Domicilio = $_REQUEST['domicilio'];
	$Sexo = $_REQUEST['sexo'];
	$EstadoCivil = $_REQUEST['estadoCivil'];
	$Ocupacion = $_REQUEST['ocupacion'];
	$Cel = $_REQUEST['cel'];
	$Tel = $_REQUEST['tel'];
	$Estatura = $_REQUEST['estatura'];
	$Peso = $_REQUEST['peso'];
	$Medico = $_REQUEST['medico'];
	$FechaAlta = $_REQUEST['fechaAlta'];
	

	$sql="INSERT INTO paciente(idpaciente,Curp,NombreCompleto,Edad,FechaNacimiento,Domicilio,Sexo,EstadoCivil,Ocupacion,Cel,Tel,Estatura,Peso,Medico,FechaAltaSistema) 
	VALUES ('','$Curp','$Nombre','$Edad','$FechaNacimiento','$Domicilio','$Sexo','$EstadoCivil','$Ocupacion','$Cel','$Tel','$Estatura','$Peso','$Medico','$FechaAlta')";

		$resultado = $conex->query($sql);
		if ($resultado) {
			header("location:antecedentes.php");						
		}
		else{
			mensaje("Upss error al Registrar", "Vuelve a intentarlo ", "agregarPaciente.php");			
		}
		break;

	case 3:
	$idpaciente = $_REQUEST['idpaciente'];
	$Alcohol = $_REQUEST['alcohol'];
	$Tabaco = $_REQUEST['tabaco'];
	$Drogas = $_REQUEST['drogas'];
	$Alimentacion = $_REQUEST['alimentacion'];
	$Dipsia = $_REQUEST['dipsia'];
	$Gemelar = $_REQUEST['gemelar'];
	$Enfermedades = $_REQUEST['enfermedades'];
	$Alergias = $_REQUEST['alergias'];
	$Anticonceptivos = $_REQUEST['anticonceptivos'];
	$Sangre = $_REQUEST['sangre'];
	
	$sql="INSERT INTO antecedentes(idantecedentes,paciente_idpaciente,Alcohol,Tabaco,Drogas,Alimetacion,Dipsia,Gemelar,EnfermedadesHereditarias,Alergias,Anticonceptivos,TipoSangre) VALUES ('','$idpaciente','$Alcohol','$Tabaco','$Drogas','$Alimentacion','$Dipsia','$Gemelar','$Enfermedades','$Alergias','$Anticonceptivos','$Sangre')";

		$resultado = $conex->query($sql);
		if ($resultado) {
			mensaje('Usuario Registrado','Ahora puedes visualizarlo en "Administracion de Usuarios"',"admonPaciente.php");						
		}
		else{
			mensaje("Ups error al Registrar", "Vuelve a intentarlo ", "antecedentes.php");			
		}
		break;

	
	case 4:
		session_start();
		$usuario = $_REQUEST['usuario'];
		$contraseña = $_REQUEST['contraseña'];
		$contraseña = md5($contraseña);
		$sql = "SELECT * FROM usuarios WHERE Usuario = '$usuario' and Contraseña = '$contraseña'";
		$resultado = $conex->query($sql);
		if($fila=mysqli_fetch_array($resultado)){
			$_SESSION['usuarios']=$fila['TipoUsuario'];
			$_SESSION['usuario']=$fila[0];
			if($_SESSION['usuarios'] =='Administrador'){  
				header('Location:inicioAdmon.php');
			}
			else if($_SESSION['usuarios'] =='Medico') {
				header('Location:inicioMedico.php');			
			}
		}else{
			mensaje('Ups','Datos erroneos, intenta de nuevo','login.php');
		}
		
	break;

	case 5:
		$badera = 0;
		$nombre = $_REQUEST['nombre'];
		$cedula = $_REQUEST['cedula'];
		$edad = $_REQUEST['edad'];
		$sexo = $_REQUEST['sexo'];
		$cel = $_REQUEST['cel'];
		$tel = $_REQUEST['tel'];
	    $especialidad = $_REQUEST['especialidad'];
		$correo = $_REQUEST['correo'];
		$user = $_REQUEST['user'];
		$pass = $_REQUEST['pass'];
		$TipoUsuario = $_REQUEST['tipo'];
		$FechaAlta = $_REQUEST['fecha'];
		$pass = md5($pass);

		$sql = "UPDATE `usuarios` SET NombreCompleto='$nombre',CedulaProfesional='$cedula',Edad='$edad',Sexo='$sexo',Cel='$cel',Tel='$tel',Especialidad='$especialidad',Correo='$correo',Usuario='$user',Contraseña='$pass',TipoUsuario='$TipoUsuario',FechaAltaSistema='$FechaAlta' WHERE CedulaProfesional='$cedula'";
		$resultado = $conex->query($sql);
		if($resultado){
			mensaje('A c t u a l i z a d o','Se han actualizado los datos del usuario','admonUsuario.php');
		} else{
			mensaje('Ups','Error al actualizar, intenta de nuevo','admonUsuario.php');

		}

	break;

		case 6:
		$bandera = 0;
		$CedulaProfesional = $_REQUEST['CedulaProfesional'];
		$sql = "DELETE FROM usuarios WHERE CedulaProfesional='$CedulaProfesional'";
		$res = $conex->query($sql);
		if($res){
			$bandera = 1;
			if ($bandera==1) {
				mensaje('F i n a l i z a d o','El usuario ha sido eliminado :)','admonUsuario.php');				
			}
		}
		else{
				mensaje('¡ E r r o r !','Hubó un error al eliminar :(','admonUsuario.php');
		}
	break;

	case 7:
	$Curp = $_REQUEST['curp'];
	$Nombre = $_REQUEST['nombre'];
	$Edad = $_REQUEST['edad'];
	$FechaNacimiento = $_REQUEST['fechaNacimiento'];
	$Domicilio = $_REQUEST['domicilio'];
	$Sexo = $_REQUEST['sexo'];
	$EstadoCivil = $_REQUEST['estadoCivil'];
	$Ocupacion = $_REQUEST['ocupacion'];
	$Cel = $_REQUEST['cel'];
	$Tel = $_REQUEST['tel'];
	$Estatura = $_REQUEST['estatura'];
	$Peso = $_REQUEST['peso'];
	$Medico = $_REQUEST['medico'];
	$FechaAlta = $_REQUEST['fechaAlta'];
	

	$sql="UPDATE `paciente` SET Curp='$Curp',NombreCompleto='$Nombre',Edad='$Edad',FechaNacimiento='$FechaNacimiento',Domicilio='$Domicilio',Sexo='Sexo',EstadoCivil='EstadoCivil',Ocupacion='Ocupacion',Cel='$Cel',Tel='$Tel',Estatura='Estatura',Peso='$Peso',Medico='$Medico',FechaAltaSistema='FechaAlta' WHERE Curp='$Curp'";

		$resultado = $conex->query($sql);
		if ($resultado) {
			header("location:editarAntecedentes.php");						
		}
		else{
			mensaje("Error al Registrar", "Vuelve a intentarlo ", "editarPaciente.php");			
		}
		break;

	case 8:
	$idpaciente = $_REQUEST['idpaciente'];
	$Alcohol = $_REQUEST['alcohol'];
	$Tabaco = $_REQUEST['tabaco'];
	$Drogas = $_REQUEST['drogas'];
	$Alimentacion = $_REQUEST['alimentacion'];
	$Dipsia = $_REQUEST['dipsia'];
	$Gemelar = $_REQUEST['gemelar'];
	$Enfermedades = $_REQUEST['enfermedades'];
	$Alergias = $_REQUEST['alergias'];
	$Anticonceptivos = $_REQUEST['anticonceptivos'];
	$Sangre = $_REQUEST['sangre'];
	
	$sql="UPDATE antecedentes SET paciente_idpaciente='$idpaciente',Alcohol='$Alcohol',Tabaco='$ta
	',Drogas='$Drogas',Alimetacion='$Alimetacion',Dipsia='Dipsia',Gemelar='$Gemelar',EnfermedadesHereditarias='Enfermedades',Alergias='$Alergias',Anticonceptivos='$Anticonceptivos',TipoSangre='Sangre' WHERE paciente_idpaciente='$idpaciente'";

		$resultado = $conex->query($sql);
		if ($resultado) {
			mensaje('A c t u a l i z a d o','Se han actualizado los datos del paciente exitosamente',"admonPaciente.php");						
		}
		else{
			mensaje("Error al actualizar", "Vuelve a intentarlo ", "editarAntecedentes.php");			
		}
		break;

		case 9:
		$bandera = 0;
		$CedulaProfesional = $_REQUEST['CedulaProfesional'];
		$sql = "DELETE FROM usuarios WHERE CedulaProfesional='$CedulaProfesional'";
		$res = $conex->query($sql);
		if($res){
			$bandera = 1;
			if ($bandera==1) {
				mensaje('F i n a l i z a d o','El usuario ha sido eliminado :)','admonUsuario.php');				
			}
		}
		else{
				mensaje('¡ E r r o r !','Hubó un error al eliminar :(','admonUsuario.php');
		}
	break;

	case 10:
		$bandera = 0;
		$CedulaProfesional = $_REQUEST['CedulaProfesional'];
		$sql = "DELETE FROM usuarios WHERE CedulaProfesional='$CedulaProfesional'";
		$res = $conex->query($sql);
		if($res){
			$bandera = 1;
			if ($bandera==1) {
				mensaje('F i n a l i z a d o','El usuario ha sido eliminado :)','admonUsuario.php');				
			}
		}
		else{
				mensaje('¡ E r r o r !','Hubó un error al eliminar :(','admonUsuario.php');
		}
	break;
	}

	?>