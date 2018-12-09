<?php 
//importamos el modulo de usuario
require '../modelo/m_tusuario.php';

session_start();

//instanciamos el objeto
$oUser = new user();

$oUser->usuario = $_SESSION['user'];

$oUser->selectUser();
$row = $oUser->row();
$intFallidos = $row['intentos_fallidos'];

$r1 = trim(strtoupper($_POST['r1']));
$r2 = trim(strtoupper($_POST['r2']));

//validar respuestas del usuario
if ($r1 == $_SESSION['respuesta1'] and $r2 == $_SESSION['respuesta2']) {
	echo 0; // mostramos espere un momento
	$oUser->intentos_fallidos = 0; // enviamos el valor a intentos fallidos
	$oUser->updateUserInt(); //modificamos cada intento fallido del usuario
} else{
	if ($intFallidos == 3) {
		$oUser->bloqueado = 2;
		$oUser->updateUserBlock();
		$oUser->intentos_fallidos = 0; // enviamos el valor a intentos fallidos
		$oUser->updateUserInt(); //modificamos cada intento fallido del usuario
		echo 2; // notificamos al usuario que se ha suspendido
	} else{
		$intFallidos = $intFallidos + 1; // hacemos un contador de intentos
		$oUser->intentos_fallidos = $intFallidos; // enviamos el valor a intentos fallidos
		$oUser->updateUserInt(); //modificamos cada intento fallido del usuario
		echo 1; // (1) Respuestas incorrectas
	}
}

?>