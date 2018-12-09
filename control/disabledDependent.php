<?php 

$id = $_POST['id']; // recibimos el id del asegurado por metodo POST

require '../modelo/m_dependent.php'; //importamos la clase
$objDependent = new class_Dependent(); // creamos el objeto

$objDependent->updateDependent($sql = "UPDATE tdependiente SET estatus = 0 WHERE iddependiente = '$id'"); // cambiamos el estatus para desactivarlo
$objDependent->selectDependent($sql = "SELECT estatus FROM tdependiente WHERE iddependiente = '$id'"); // consultamos si se cambio el estatus
// creamos el arreglo
$row = $objDependent->row();
// validamos si se realizo el cambio
if ($row['estatus'] == 0) {
    echo 1;
} else {
    echo false;
}


?>