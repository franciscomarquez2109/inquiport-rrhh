<?php 
// cerrar sesion
require '../modelo/m_tusuario.php';

session_start();

if ($_SESSION['user'] == "") {
    header('location:../pages/sesion.php');
} else{
    //instanciamos el objeto
    $objUser = new user();
    $objUser->usuario = $_SESSION['user'];
    $objUser->inicio_sesion = 0;
    $objUser->updateUserIniSesion();
    session_destroy();
    header('location:../pages/sesion.php');
}




?>