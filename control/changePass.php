<?php 

require '../modelo/m_tclave.php'; // clave del usuaario

session_start(); //creamos la sesion de usuario

//instanciamos el objetos user pass
$oUserPass = new userPass();

$oUserPass->clave_anterior = $_SESSION['pass']; // enviamos la contraseña actual
$oUserPass->clave = $_POST['pass']; // enviamos la nueva contraseña

$oUserPass->updateUserPass($_SESSION['user']); //cambiamos la cntraseña y guardamos la anterior

$oUserPass->selectUserPass($_SESSION['user']);

$row = $oUserPass->row();

if ($row['clave'] == $_POST['pass']) {
	echo 1; // se realizo el cambio de clave
} else{
	echo 0; // no se realizo el cambio de clave
}


?>