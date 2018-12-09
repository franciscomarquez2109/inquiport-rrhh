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
	$pass = $row['clave'];
	if ($block == 0) { //validamos si el usuario esta bloqueado
		$oquestions->selectQuestions($user);
		$row = $oquestions->row();
		session_start();
		$_SESSION['user'] = $user;
		$_SESSION['pass'] = $pass;
		$_SESSION['pregunta1'] = $row['pregunta1'];
		$_SESSION['pregunta2'] = $row['pregunta2'];
		$_SESSION['respuesta1'] = $row['respuesta1'];
		$_SESSION['respuesta2'] = $row['respuesta2'];
		echo 0;
	} else if ($block == 1) {
		echo 1;
	} else if ($block == 2){
		echo 2;
	}
} else {
	echo false;
}


?>