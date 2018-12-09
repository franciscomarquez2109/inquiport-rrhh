<?php 
//importamos los modulos
require '../modelo/m_tusuario.php'; // usuario
require '../modelo/m_tclave.php'; // clave del usuaario

session_start(); //creamos la sesion de usuario

//instanciamos el objetos user pass
$oUserPass = new userPass();

$oUserPass->clave_anterior = $_SESSION['pass']; // enviamos la contraseña actual
$oUserPass->clave = $_POST['pass']; // enviamos la nueva contraseña

date_default_timezone_set('UTC');
$fechaFin = date('Y-m-d');
$oUserPass->fecha_fin = $fechaFin;

$oUserPass->updateUserPass($_SESSION['user']); //cambiamos la cntraseña y guardamos la anterior

$oUser = new user(); // instanciamos el objeto user

//enviamos los datos a la clase user
$oUser->usuario = $_SESSION['user'];
$oUser->primer_inicio = 1;

$oUser->updateUserPi(); // cambiamos el estatus del primer inicio a 1


// OJO NO ME CONVENCE ESTE PASO :(
// consultamos ese estatus
$oUser->selectuser();
$row = $oUser->row();

//validamos el cambio de estatus para notificar al usuario
if ($row['primer_inicio'] == 1) {
	echo 1;
} else{
	echo 0;
}

?>