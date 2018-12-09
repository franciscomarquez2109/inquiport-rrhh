<?php 
//importamos el modulo de usuario
require '../modelo/m_tusuario.php';

//instanciamos el objeto
$objUser = new user();

//declaramos variables
$user1 = trim(strtoupper($_POST['user']));
$pass1 = trim(strtoupper($_POST['pass']));

//$user1 = "FMARQUEZ";
//$pass1 = 1234;

//enviamos los datos recibidos al modulo
$objUser->usuario = $user1;

//realizamos la consulta del usuario
$objUser->selectUser();

//creamos el arreglo
if ($row = $objUser->row()) {
	//definimos variables para mejor manejo de datos
	$user = $row['usuario'];
	$pass = $row['clave'];
	$perfil = $row['perfiles'];
	$blockUser = $row['bloqueado'];
	$primerIni = $row['primer_inicio'];
	$intFallidos = $row['intentos_fallidos'];

	//hacemos la validacion de los datos del usuario
	if ($user == $user1 and $pass == $pass1) {
		//validamos el estado de bloqueo del usuario para mostrar una notificacion
		//al usuario en pantalla
		
		$objUser->intentos_fallidos = 0; // enviamos el valor (0) a intentos fallidos
		$objUser->updateUserInt(); // reseteamos los intentos fallidos a (0)

		if ($blockUser == 0) { // (0) no esta bloqueado
			$objUser->inicio_sesion = 1;
			$objUser->updateUserIniSesion();
			session_start(); 
			$_SESSION['user'] = $user;
			$_SESSION['pass'] = $pass;
			$_SESSION['perfil'] = $perfil;
			$_SESSION['departa'] = $departa;
			$_SESSION['inisesion'] = 1;
			$_SESSION['primerIni'] = $primerIni;
			echo 0;
		} else if ($blockUser == 1) { // (1) esta bloqueado temporalmente
			echo 1;
		} else if ($blockUser == 2) { // (3) esta bloqueado definitivamente
			echo 2;
		}
		
	} else{
		if ($intFallidos == 3) {
			$objUser->bloqueado = 1;
			$objUser->updateUserBlock();
			echo 4; // notificamos al usuario que se ha bloqueado
		} else{
			if ($blockUser == 2) {
				echo 2;
			} else if ($blockUser == 1) {
				echo 1;
			}
			else{
				echo 3; // (3) usuario o clave incorrectos
				$intFallidos = $intFallidos + 1; // hacemos un contador de intentos
				$objUser->intentos_fallidos = $intFallidos; // enviamos el valor a intentos fallidos
				$objUser->updateUserInt(); //modificamos cada intento fallido del usuario
			}
		}
	}
} else{
	echo false;
}
?>
