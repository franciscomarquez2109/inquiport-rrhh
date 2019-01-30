<?php 
date_default_timezone_set('UTC');
$prima_semanal = $_POST['prima_semanal'];
$prima_quincenal = $_POST['prima_quincenal'];
$prima_ejecutivo = $_POST['prima_ejecutivo'];
$fecha_inicial_nueva = $_POST['prima_semanal'];
$fecha_final_nueva = $_POST['prima_semanal'];
$fecha_inicio = $_POST['fecha_inicio_nueva'];
$fecha_final = $_POST['fecha_final_nueva'];
$fecha_registro_nueva = date('Y-m-d');
$fecha_corte_nueva = date('Y-m-d');


require '../modelo/m_tablePrima.php'; //importamosla clase tabla prima
$objTablePrima = new class_tablePrima(); // creamos el objeto

$objTablePrima->UpdateTablePrima($sql = "UPDATE ttabla_prima SET estatus = 0 WHERE estatus = 1");

$objTablePrima->selectTablePrima($sql = "SELECT estatus FROM ttabla_prima WHERE estatus = 1");
$row = $objTablePrima->row();
if ($row['estatus'] == "") {
    $count_tabla = count($prima_semanal);
    for($i=0; $i<$count_refe; $i++){
        $prima_semanal[$i] = str_replace('.', '', $prima_semanal[$i]);
        $prima_semanal[$i] = str_replace(',', '.', $prima_semanal[$i]);
        $prima_quincenal[$i] = str_replace('.', '', $prima_quincenal[$i]);
        $prima_quincenal[$i] = str_replace(',', '.', $prima_quincenal[$i]);
        $prima_ejecutivo[$i] = str_replace('.', '', $prima_ejecutivo[$i]);
        $prima_ejecutivo[$i] = str_replace(',', '.', $prima_ejecutivo[$i]);
        $objTablePrima->UpdateTablePrima($sql = "UPDATE ttabla_prima SET prima_semanal = '$prima_semanal[$i]',prima_quincenal = '$prima_quincenal[$i]',prima_ejecutivo = '$prima_ejecutivo[$i]',fecha_inicio = '$fecha_inicial_nueva',fecha_final='$fecha_final_nueva',fecha_registro = '$fecha_registro_nueva',fecha_corte = '$fecha_corte_nueva'");
        $objTablePrima->selectTablePrima($sql = "SELECT fecha_corte FROM ttabla_prima WHERE estatus = 1");
        $row = $objTablePrima->row();
        if ($row['fecha_corte'] == $fecha_corte_nueva) {
            echo 1;
        } else{
            echo 0;
        }
    }
}

?>