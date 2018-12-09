<?php 
//registrar dependiente

//captar los datos a registrar
$id = $_POST['id_insured'];
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
$monto_prima_replace =  str_replace(',', '.', $monto_prima);
$monto_replace =  str_replace(',', '.', $monto);
$monto_empresa_replace =  str_replace(',', '.', $monto_empresa);
$monto_empleado_replace =  str_replace(',', '.', $monto_empleado);

require '../modelo/m_dependent.php'; //importamos la clase
$objDependent = new class_Dependent(); // creamos el objeto
//verificamos que el asegurado no se encuentre registrado

$objDependent->selectDependent($sql = "SELECT cedula FROM tdependiente WHERE estatus = 0 OR estatus = 1 AND idasegurado = ".$id." AND cedula = ".$ci);
$row = $objDependent->row();
if ($ci == $row['cedula']) {
    echo 2; // la persona se encuentra en la base de datos
} else{
    $objDependent->getDateDependent($id,$ci,$pn,$sn,$pa,$sa,$sexo,$fn,$edad,$maternidad,$parentesco,$ec,$hasta25);
    $objDependent->insertDependent(); // hacemos el registro del dependiente

    $objDependent->selectDependent($sql = "SELECT iddependiente,cedula FROM tdependiente WHERE estatus = 1 AND cedula = ".$ci);
    $row = $objDependent->row();
    
    if ($ci == $row['cedula']) {
        //registro de montos al asegurado
        $iddependiente = $row['iddependiente']; // agsinamos para realizar el registro de los montos al asegurado
        require '../modelo/m_montos_dependent.php';
        $objMontos_depen = new class_MontoDependent();
        $objMontos_depen->getDateMontoDependent($monto_prima_replace,$mes_prima,$monto_replace,$monto_empleado_replace,$monto_empresa_replace,$fecha_corte_monto,$iddependiente);
        $objMontos_depen->insertMontoDependent();
        //consultamos si algun dato registrado para verificar el registro
        $objMontos_depen->selectMontoDependent($sql = "SELECT iddependiente FROM tmontos_dependiente WHERE estatus = 1 AND iddependiente = ".$iddependiente);
        $row = $objMontos_depen->row();
        if ($iddependiente == $row['iddependiente']) {
            echo 1; // registro realizado
        } else {
            echo false;
        }
    } else {
        echo false;
    }
    
}
?>