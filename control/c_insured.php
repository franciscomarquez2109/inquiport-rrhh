<?php 
//registrar asegurado

//captar los datos a registrar
$id = $_POST['idpersona'];
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

$monto_prima_replace =  str_replace(',', '.', $monto_prima_r);
$monto_replace =  str_replace(',', '.', $monto_r);
$monto_empresa_replace =  str_replace(',', '.', $monto_empresa_r);
$monto_empleado_replace =  str_replace(',', '.', $monto_empleado_r);


require '../modelo/m_insured.php'; //importamos la clase
$objInsured = new class_Insured(); // creamos el objeto
//verificamos que el asegurado no se encuentre registrado
$objInsured->selectInsured($sql = "SELECT idpersona FROM tasegurado WHERE estatus = 1 AND idpersona = ".$id);
$row = $objInsured->row();
if ($id == $row['idpersona']) {
    echo 2; // la persona se encuentra en la base de datos
} else{
    $objInsured->getDateInsured($id,$tipo_nomina,$departamento,$maternidad); // enviamos datos a la clase asegurado
    $objInsured->insertInsured();

    $objInsured->selectInsured($sql = "SELECT idpersona,idasegurado FROM tasegurado WHERE estatus = 1 AND idpersona = ".$id);
    $row = $objInsured->row();
    $idasegurado = $row['idasegurado'];
    if ($id == $row['idpersona']) {
        //registro de montos al asegurado
        require '../modelo/m_montos_insured.php';
        $objMontos_ase = new class_MontoInsured();
        $objMontos_ase->getDateMontoInsured($monto_prima_replace,$mes_prima,$monto_replace,$monto_empleado_replace,$monto_empresa_replace,$fecha_corte_monto,$idasegurado);
        $objMontos_ase->insertMontoInsured();
        //consultamos si algun dato registrado para verificar el registro
        $objMontos_ase->selectMontoInsured($sql = "SELECT idasegurado FROM tmontos_asegurado WHERE idasegurado = ".$idasegurado);
        $objMontos_ase->row();
        if ($idasegurado == $row['idasegurado']) {
            echo 1; // registro realizado
        } else {
            echo false;
        }
    } else {
        echo false; // registro fallido
    }
}
?>