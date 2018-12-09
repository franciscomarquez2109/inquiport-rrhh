<?php 

//captar los datos a registrar
$id = $_POST['idpersona']; // id asegurado
$tipo_nomina = $_POST['tipo_nomina'];
$departamento = $_POST['departamento'];
$maternidad = $_POST['maternidad'];
$monto_prima = $_POST['monto_prima']; // remplazamos la coma por punto y eliminamos el punto
$mes_prima = $_POST['mes_prima'];
$monto = $_POST['monto']; // remplazamos la coma por punto y eliminamos el punto
$monto_empresa = $_POST['monto_empresa']; // remplazamos la coma por punto y eliminamos el punto
$monto_empleado = $_POST['monto_empleado']; // remplazamos la coma por punto y eliminamos el punto
date_default_timezone_set('UTC');
$fecha_corte_monto = date('y-m-d'); // se obtiene el mes actual para restarlo de con la deferencia de meses

//cambiamos el formato de los montos para ingresarlos a la base de datos
$monto_prima_r =  str_replace('.', '', $monto_prima);
$monto_r =  str_replace('.', '', $monto);
$monto_empresa_r =  str_replace('.', '', $monto_empresa);
$monto_empleado_r =  str_replace('.', '', $monto_empleado);
// montos preparados para ingresar en la DB (00.000)
$monto_prima_replace =  str_replace(',', '.', $monto_prima);
$monto_replace =  str_replace(',', '.', $monto);
$monto_empresa_replace =  str_replace(',', '.', $monto_empresa);
$monto_empleado_replace =  str_replace(',', '.', $monto_empleado);

require '../modelo/m_insured.php';
$objInsured = new class_Insured(); // clase asegurado
$objInsured->updateInsured($sql = "UPDATE tasegurado SET idtipo_nomina = '$tipo_nomina',iddepartamento = '$departamento',maternidad = '$maternidad' WHERE idasegurado = '$id'");

require '../modelo/m_montos_insured.php';
$objMontos_ase = new class_MontoInsured(); // clase montos de asegurado
$objMontos_ase->updateMontoInsured($sql = "UPDATE tmontos_asegurado SET estatus = 0 WHERE estatus = 1 AND idasegurado =".$id);

$objMontos_ase->selectMontoInsured($sql = "SELECT estatus FROM tmontos_asegurado WHERE idasegurado = ".$id);
$row = $objMontos_ase->row();
if ($row['estatus'] == 0) {
    //registramos el nuevo monto modificado
    $objMontos_ase->getDateMontoInsured($monto_prima_replace,$mes_prima,$monto_replace,$monto_empleado_replace,$monto_empresa_replace,$fecha_corte_monto,$id);
    $objMontos_ase->insertMontoInsured();
    
    $objMontos_ase->selectMontoInsured($sql = "SELECT monto_prima_asegurado FROM tmontos_asegurado WHERE estatus = 1 AND idasegurado = ".$id);
    $row = $objMontos_ase->row();
    if ($monto_prima_replace == $row['monto_prima_asegurado']) {
        echo 1; // cambios realizados
    } else {
        echo false;
    }
} else {
    echo false;
}



?>