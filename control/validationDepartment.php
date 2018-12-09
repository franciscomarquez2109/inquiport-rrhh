<?php 

session_start(); // creamos la sesion de usuario

if ($_SESSION['user'] =="") {
  header('location:../pages/sesion.php');
  die();
} else if ($_SESSION['user'] != "") {
	if ($_SESSION['primerIni'] == 1) {
		header('location:../pages/home.php');
	} else if ($_SESSION['primerIni'] == 0) {
		header('location:../pages/updatePass.php');
	}
}
?>