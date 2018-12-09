<?php 
//importamos los modulos
require '../modelo/m_tusuario.php'; // usuario
require '../modelo/m_preguntas.php'; // preguntas

//instanciamos el objeto
$oUser = new user();
$oquestions = new questions();

//enviamos el nombre de usuario a la clase
$oUser->usuario = $_POST['searchuser'];

//consultamos al usuario
$oUser->selectUser();

//validamos la consulta
if ($row = $oUser->row()) {
	$block = $row['bloqueado']; //asignamos el dato a la variable block
	$user = $row['usuario'];
	if ($block == 2) { //validamos si el usuario esta bloqueado
		echo 2; // mostramos usuario suspendido
	} else if ($block == 0) {
		echo 0;
	}
	else if ($block == 1) {

		$oquestions->selectQuestions($user); // consultamos las preguntas de seguridad
		$row = $oquestions->row(); // creamos el areglo con la consulta

		session_start(); // iniciamos la variable session para las variables globales

		$_SESSION['user'] = $user;
		$_SESSION['pregunta1'] = $row['pregunta1'];
		$_SESSION['pregunta2'] = $row['pregunta2'];
		$_SESSION['respuesta1'] = $row['respuesta1'];
		$_SESSION['respuesta2'] = $row['respuesta2'];

		echo 1; // mostramos 1 para indicar al usuario que se busca el usuario
	}
} else {
	echo false; // mostramos al usuario que no existe el usuario
}


?>