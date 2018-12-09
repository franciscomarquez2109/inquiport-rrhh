<?php 

$id = trim($_POST['id']); //recibimos la cedula de la persona para hacer la consulta
require '../modelo/m_insured.php'; //importamos la clase persona
$objInsured = new class_Insured(); // creamos la clase

$objInsured->selectInsured($sql = "SELECT a.idasegurado,p.cedula,p.nombre1,p.nombre2,p.apellido1,p.apellido2,p.fecha_nac,p.sexo,p.edad,a.maternidad,d.departamento,t.tipo_nomina,c.condicion,a.monto_prima,a.mes_prima,a.monto,a.monto_empresa,a.monto_empleado FROM tasegurado a INNER JOIN tpersona p ON p.idpersona = a.idpersona INNER JOIN tdepartamento d ON d.iddepartamento = a.iddepartamento INNER JOIN ttiponomina t on t.idtipo_nomina = a.idtipo_nomina INNER JOIN tcondicion c ON c.idcondicion = a.idcondicion WHERE a.estatus = 1 and a.idasegurado = 1");
$row = $objInsured->row(); // creamos el arreglo
    if ($row['idasegurado'] == $id) { // si hay coincidencia el los datos
        $nombres .= $row['nombre1']." ".$row['nombre2']." ".$row['apellido2']." ".$row['apellido2'];
        $rowInsured = array($row['idasegurado'],$row['cedula'],$nombres,$row['fecha_nac'],$row['sexo'],$row['edad'],$row['maternidad'],$row['departamento'],$row['tipo_nomina'],$row['condicion'],$row['monto_prima'],$row['mes_prima'],$row['monto'],$row['monto_empresa'],$row['monto_empleado']);
        echo json_encode($rowInsured);
    } else {
        echo 0; // no encontro a la persona
    }

?>