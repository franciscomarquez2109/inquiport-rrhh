SELECT p.idpersona,p.cedula,p.nombre1,p.nombre2,p.apellido1,p.apellido2,p.sexo,p.fecha_nac,p.edad,i.ingreso
FROM tpersona p
INNER JOIN tingreso i ON i.idingreso = p.idingreso
WHERE p.estatus = 1 and p.cedula = '24019826'