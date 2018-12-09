<?php 

$ci = trim($_POST['cedula_persona']); //recibimos la cedula de la persona para hacer la consulta
require '../modelo/m_newPerson.php'; //importamos la clase persona
$objPerson = new class_person(); // creamos la clase

$objPerson->selectPerson($sql = "SELECT p.idpersona,p.cedula,p.nombre1,p.nombre2,p.apellido1,p.apellido2,p.sexo,p.fecha_nac,p.edad,i.ingreso FROM tpersona p INNER JOIN tingreso i ON i.idingreso = p.idingreso WHERE p.estatus = 1 and p.cedula =".$ci );
$row = $objPerson->row(); // creamos el arreglo
    if ($row['cedula'] == $ci) { // si hay coincidencia el los datos
        //validamos el tipo de ingreso que tenga la persona para ver si puede ser asegurado
        if ($row['ingreso'] == 'ACTIVO' || $row['ingreso'] == 'TERCERO') {
            $nombres .= $row['nombre1']." ".$row['nombre2']." ".$row['apellido2']." ".$row['apellido2'];
            $rowPerson = array($row['idpersona'],$row['cedula'],$nombres,$row['sexo'],$row['fecha_nac'],$row['edad'],$row['ingreso']);
            echo json_encode($rowPerson);
        } else {
            echo 2;
        }
        
    } else {
        echo 0; // no encontro a la persona
    }

?>