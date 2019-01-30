<?php
date_default_timezone_set('UTC');
$fi = $_POST['cortefi'];
$ff = $_POST['corteff'];
$fc = date('Y-m-d');
// generar corte de fechas de la tabla actual y asu vez realizar nuevo corte
require '../modelo/m_tablePrima.php'; //importamosla clase tabla prima
$objTablePrima = new class_tablePrima(); // creamos el objeto
$objTablePrima->UpdateTablePrima($sql = "UPDATE ttabla_prima SET fecha_inicio ='$fi',fecha_final ='$ff',fecha_corte ='$fc' WHERE estatus = 1"); //realizamos consulta

$objTablePrima->selectTablePrima($sql = "SELECT fecha_corte FROM ttabla_prima WHERE estatus = 1");

$row = $objTablePrima->row();
if ($row['fecha_corte'] == $fc) {
    echo 1;
} else{
    echo 0;
}
?>