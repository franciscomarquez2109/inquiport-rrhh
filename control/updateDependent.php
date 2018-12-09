<?php

//captar los datos a registrar
$id = $_POST['iddependiente'];
$ec = $_POST['estado_civil'];
$hasta25 = trim(strtoupper($_POST['hasta25']));
$ci = trim($_POST['ci']);
$pn = trim(strtoupper($_POST['pn']));
$sn = trim(strtoupper($_POST['sn']));
$pa = trim(strtoupper($_POST['pa']));
$sa = trim(strtoupper($_POST['sa']));
$sexo = trim($_POST['sexo']);
$fn = $_POST['fn'];
$edad = trim($_POST['edad']);
$parentesco = $_POST['parentesco'];
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

$monto_prima_replace =  str_replace(',', '.', $monto_prima_r);
$monto_replace =  str_replace(',', '.', $monto_r);
$monto_empresa_replace =  str_replace(',', '.', $monto_empresa_r);
$monto_empleado_replace =  str_replace(',', '.', $monto_empleado_r);

require '../modelo/m_dependent.php'; //importamos la clase
$objDependent = new class_Dependent(); // creamos el objeto
$objDependent->selectDependent($sql="UPDATE tdependiente SET nom1='$pn',nom2='$sn',ape1='$pa',ape2='$sa',sexo='$sexo',fecha_nac='$fn',edad='$edad',maternidad='$maternidad',idparentesco='$parentesco',idestado_civil='$ec',hijos_hasta_25='$hasta25' WHERE iddependiente='$id'");

require '../modelo/m_montos_dependent.php';
$objMontos_depen = new class_MontoDependent();

$objMontos_depen->updateMontoDependent($sql = "UPDATE tmontos_dependiente SET estatus = 0 WHERE estatus = 1 AND iddependiente =".$id);

$objMontos_depen->selectMontoDependent($sql = "SELECT estatus FROM tmontos_dependiente WHERE iddependiente = ".$id);
$row = $objMontos_depen->row();

//verificamos el nuevo cambio con una consulta

if ($row['estatus'] == 0) {
    //registramos el nuevo monto modificado
    $objMontos_depen->getDateMontoDependent($monto_prima_replace,$mes_prima,$monto_replace,$monto_empleado_replace,$monto_empresa_replace,$fecha_corte_monto,$id);
    $objMontos_depen->insertMontoDependent();
    
    $objMontos_depen->selectMontoDependent($sql = "SELECT monto_prima_dependiente FROM tmontos_dependiente WHERE estatus = 1 AND iddependiente = ".$id);
    $row = $objMontos_depen->row();
    if ($monto_prima_replace == $row['monto_prima_dependiente']) {
        echo 1; // cambio realizado realizado
    } else {
        echo false;
    }
} else {
    echo false;
}
?>