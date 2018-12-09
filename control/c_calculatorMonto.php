<?php 
//calcular montos primas

//recibimos datos para realizar el calculo
$edad = trim(strtoupper($_POST['edad']));
$sexo = trim(strtoupper($_POST['sexo']));
$tipo_nomina = trim(strtoupper($_POST['tipo_nomina']));
$maternidad = trim(strtoupper($_POST['maternidad']));
$hasta25 = trim(strtoupper($_POST['hasta25']));
//validamos el estado de la variable hasta 25 para saber si esta vacio o no y poder saber 
//si el calculo es para un asegurado o dependiente
if (empty($hasta25)) {
    $hasta25 = "NO";
}

require '../modelo/m_tablePrima.php'; //importamosla clase tabla prima
$objTablePrima = new class_tablePrima(); // creamos el objeto
$objTablePrima->selectTablePrima($sql = "SELECT * FROM ttabla_prima WHERE estatus = 1"); //realizamos consulta

while ($row = $objTablePrima->row()) {
    if ($edad >= $row['edad_min'] and $edad <= $row['edad_max'] and $sexo == $row['sexo'] and $maternidad == $row['maternidad'] and $hasta25 == $row['hasta25']) {
        $e = 1; // encontro un registro
        $prima_semanal = $row['prima_semanal'];
        $prima_quincenal = $row['prima_quincenal'];
        $prima_ejecutivo = $row['prima_ejecutivo'];
        $fi = $row['fecha_inicio'];
        $ff = $row['fecha_final'];
        $objTablePrima->close();
        break; // salimos de ciclo
    } else{
        $e = 0; // no encontro registro
    }
}
if ($e == 1) {
    date_default_timezone_set('UTC');
    $fechaActual = date('m'); // se obtiene el mes actual para restarlo de con la deferencia de meses
    $fi = new DateTime($fi);
    $ff = new DateTime($ff);

    $diferencia = $fi->diff($ff);
    $meses = ( $diferencia->y * 12 ) + $diferencia->m;
    $mes_p = $meses - $fechaActual; //se resta diferencia de meses con mes actual para obtener la cantidad de meses que le quedan al trabajador
    $mes_prima = $mes_p;
    
    if ($tipo_nomina == 2) {
        $monto_prima = $prima_semanal;
        $monto = ($monto_prima*$mes_prima)/12; //calculo de monto
        $monto_empresa = $monto * 0.8;
        $monto_empleado = $monto * 0.2;
    } else if ($tipo_nomina == 3) {
        $monto_prima = $prima_quincenal;
        $monto = ($monto_prima*$mes_prima)/12; //calculo de monto
        $monto_empresa = $monto * 0.63;
        $monto_empleado = $monto * 0.37;
    } else if ($tipo_nomina == 1) {
        $monto_prima = $prima_ejecutivo;
        $monto = ($monto_prima*$mes_prima)/12; //calculo de monto
        $monto_empresa = $monto;
        $monto_empleado = 0;
    }
    
    $arrayPrima = array(number_format($monto_prima, 2, ',', '.'),$mes_prima,number_format($monto, 2, ',', '.'),number_format($monto_empresa, 2, ',', '.'),number_format($monto_empleado, 2, ',', '.'));
    echo json_encode($arrayPrima);
} else{
    echo 0;
}



?>