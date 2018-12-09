<?php 

$numero = $_POST['numero'];
$sexo = $_POST['sexo'];
$maternidad = $_POST['maternidad'];
$hasta_25 = $_POST['hasta_25'];
$edad_min = $_POST['edad_min'];
$edad_max = $_POST['edad_max'];
$prima_semanal = $_POST['prima_semanal'];
$prima_quincenal = $_POST['prima_quincenal'];
$prima_ejecutivo = $_POST['prima_ejecutivo'];

$fi = $_POST['fi'];
$ff = $_POST['ff'];
date_default_timezone_set('UTC');
$fr = date("Y-m-d");

require '../config/config_db.php';
$connect = mysqli_connect(HOST,USER,PASSWORD,DATABASE);
$count_prima = count($numero); // cantidad de registros en distinciones acedemicas
for($i=0; $i<$count_prima; $i++){
    $numero[$i] = strtoupper($numero[$i]);
    if(trim($numero[$i]) != ''){
        if (empty($maternidad[$i])) { // validamos si esta vacia la variable
            $maternidad[$i] = "NO"; // si esta vacia cambiamos ese valor vacio por "NO"
        }
        $sql = "INSERT INTO ttabla_prima (numero,sexo,maternidad,hasta25,edad_min,edad_max,prima_semanal,prima_quincenal,prima_ejecutivo,fecha_inicio,fecha_final,fecha_registro) VALUES('$numero[$i]','$sexo[$i]','$maternidad[$i]','$hasta_25[$i]','$edad_min[$i]','$edad_max[$i]','$prima_semanal[$i]','$prima_quincenal[$i]','$prima_ejecutivo[$i]','$fi','$ff','$fr')";
        if (mysqli_query($connect, $sql)) {
            echo 1; // registro exitoso
        } else{
            echo false;
        }
        
    }
}

?>