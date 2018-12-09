<?php 

$ci = trim($_POST['cedula_insured']); //recibimos la cedula de la persona para hacer la consulta
require '../modelo/m_insured.php'; //importamos la clase persona
$objInsured = new class_Insured(); // creamos la clase

$objInsured->selectInsured($sql = "SELECT a.idasegurado,p.nombre1,p.nombre2,p.apellido1,p.apellido2,p.cedula,a.idtipo_nomina,i.ingreso FROM tasegurado a INNER JOIN tpersona p ON p.idpersona = a.idpersona INNER JOIN tingreso i ON i.idingreso = p.idingreso WHERE a.estatus = 1 and  p.cedula =".$ci);
$row = $objInsured->row(); // creamos el arreglo
    if ($row['cedula'] == $ci) { // si hay coincidencia el los datos
        $nombres .= $row['nombre1']." ".$row['nombre2']." ".$row['apellido2']." ".$row['apellido2'];
        $rowPerson = array($row['idasegurado'],$nombres,$row['idtipo_nomina'],$row['ingreso']);
        echo json_encode($rowPerson);
    } else {
        echo 0; // no encontro a la persona
    }

?>