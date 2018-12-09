SELECT d.iddependiente,d.cedula,p.nombre1,p.nombre2,p.apellido1,p.apellido2,d.nom1,d.nom2,d.ape1,d.ape2,d.sexo,d.fecha_nac,d.edad,d.maternidad,d.monto_prima,d.mes_prima,d.monto,d.monto_empresa,d.monto_empleado,ec.estado_civil,c.condicion,pa.parentesco,d.hijos_hasta_25,tn.tipo_nomina,a.idtipo_nomina
FROM tdependiente d 
INNER JOIN tasegurado a ON a.idasegurado = d.idasegurado 
INNER JOIN tpersona p ON p.idpersona = a.idpersona 
INNER JOIN tcondicion c ON c.idcondicion = d.idcondicion 
INNER JOIN testado_civil ec ON ec.idestado_civil = d.idestado_civil 
INNER JOIN tparentesco pa ON pa.idparentesco = d.idparentesco 
INNER JOIN ttiponomina tn ON tn.idtipo_nomina = a.idtipo_nomina 
WHERE a.estatus = 1