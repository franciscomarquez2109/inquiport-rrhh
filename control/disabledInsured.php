<?php 

$id = $_POST['id']; // recibimos el id del asegurado por metodo POST

require '../modelo/m_insured.php'; //importamos la clase
$objInsured = new class_Insured(); // creamos el objeto

$objInsured->updateInsured($sql = "UPDATE tasegurado SET estatus = 0 WHERE idasegurado = '$id'"); // cambiamos el estatus para desactivarlo
$objInsured->selectInsured($sql = "SELECT estatus FROM tasegurado WHERE idasegurado = '$id'"); // consultamos si se cambio el estatus
// creamos el arreglo
$row = $objInsured->row();
// validamos si se realizo el cambio
if ($row['estatus'] == 0) {
    echo 1;
} else {
    echo false;
}


?>