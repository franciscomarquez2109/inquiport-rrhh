<?php 

include '../modelo/m_newPerson.php';
include '../modelo/m_distinAcademy.php';

$objPerson = new class_person(); // creamos la clase

//captar datos
$ci = trim($_POST['ci']);
$pn = trim(strtoupper($_POST['pn']));
$sn = trim(strtoupper($_POST['sn']));
$pa = trim(strtoupper($_POST['pa']));
$sa = trim(strtoupper($_POST['sa']));
$sexo = trim($_POST['sexo']);
$estado_civil = trim(strtoupper($_POST['estado_civil']));
$fn = trim($_POST['fn']);
$edad = trim($_POST['edad']);
$lugar_nac = trim(strtoupper($_POST['lugar_nac']));
$nacionalidad = trim(strtoupper($_POST['nacionalidad']));
$correo = trim($_POST['correo']);
$lateralidad = trim(strtoupper($_POST['lateral']));
$telhabi = trim($_POST['telhabi']);
$telmovil = trim($_POST['telmovil']);
$teladic = trim($_POST['teladic']);
$licencia = trim(strtoupper($_POST['licencia']));
$fecha_expe = trim(strtoupper($_POST['fecha_expe']));
$pantalon = trim(strtoupper($_POST['pantalon']));
$camisa = trim(strtoupper($_POST['camisa']));
$zapatos = trim($_POST['zapato']);
//Otros datos
$conyuge = trim(strtoupper($_POST['conyuge']));
$nac_conyuge = trim(strtoupper($_POST['nac_conyuge']));
$fecha_nac_conyuge = trim($_POST['fecha_nac_conyuge']);
$ocupacion_conyuge = trim(strtoupper($_POST['ocupacion_conyuge']));
$padre = trim(strtoupper($_POST['padre']));
$nac_padre = trim(strtoupper($_POST['nac_padre']));
$fecha_nac_padre = trim($_POST['fecha_nac_padre']);
$ocupacion_padre = trim(strtoupper($_POST['ocupacion_padre']));
$madre = trim(strtoupper($_POST['madre']));
$nac_madre = trim(strtoupper($_POST['nac_madre']));
$fecha_nac_madre = trim($_POST['fecha_nac_madre']);
$ocupacion_madre = trim(strtoupper($_POST['ocupacion_madre']));
$aof_inquiport = trim(strtoupper($_POST['aof_inquiport']));
$aof_area_inquiport = trim(strtoupper($_POST['aof_area_inquiport']));
$conoc_empleo = trim(strtoupper($_POST['conoc_empleo']));
$empleo_ant = trim(strtoupper($_POST['empleo_ant']));
$empleo_ant_cuando = trim(strtoupper($_POST['empleo_ant_cuando']));
$empleo_ant_donde = trim(strtoupper($_POST['empleo_ant_donde']));
$idioma = trim(strtoupper($_POST['idioma']));
$nom_idioma = trim(strtoupper($_POST['nom_idioma']));
$habla_idioma = trim(strtoupper($_POST['habla_idioma']));
$escribe_idioma = trim(strtoupper($_POST['escribe_idioma']));
$dist = $_POST['dist_academicas'];
$acti = $_POST['part_sociales'];
//hijos
$nom_hijo = $_POST['name_hijo'];
$sexo_hijo = $_POST['sexo_hijo'];
$naci_hijo = $_POST['lugar_nac_hijo'];
$ci_hijo = $_POST['ci_hijo'];
$ocupacion_hijo = $_POST['ocupacion_hijo'];
//grado academico
$nivel_educ = $_POST['nivel_educativo'];
$institucion = $_POST['institucion'];
$ciudad_grado = $_POST['ciudad'];
$desde_hasta = $_POST['desde_hasta'];
$anos_culminacion = $_POST['anos_culminacion'];
//Area de interes
$area_inte = $_POST['area_inte'];
$area_ofim = $_POST['area_ofim'];
$sueldo_aspi = trim(strtoupper($_POST['sueldo_aspi']));
$fecha_dispo = trim(strtoupper($_POST['fecha_dispo']));
$limitacion_geo = trim(strtoupper($_POST['limitacion_geo']));
$vehiculo = trim(strtoupper($_POST['vehiculo']));

//vehiculo
$marca_vehiculo = trim(strtoupper($_POST['marca_vehiculo']));
$modelo_vehiculo = trim(strtoupper($_POST['modelo_vehiculo']));
$version_vehiculo = trim(strtoupper($_POST['version_vehiculo']));
$transmicion = trim(strtoupper($_POST['transmicion']));
$cant_cilindros = trim(strtoupper($_POST['cant_cilindros']));
$titulo_registro = trim(strtoupper($_POST['titulo_registro']));
$ano_vehiculo = trim(strtoupper($_POST['ano_vehiculo']));
$color_vehiculo = trim(strtoupper($_POST['color_vehiculo']));
$num_placa = trim(strtoupper($_POST['num_placa']));
$num_motor = trim(strtoupper($_POST['num_motor']));
$num_carroceria = trim(strtoupper($_POST['num_carroceria']));
$uso = trim(strtoupper($_POST['uso']));

// referencias personales
$nom_ape_refe = $_POST['nom_ape_refe'];
$telefono_refe = $_POST['telefono_refe'];
$ocupacion_refe = $_POST['ocupacion_refe'];
$compania_refe = $_POST['compania_refe'];

//direccion
$ubanismo = trim(strtoupper($_POST['urbanismo']));
$direccion = trim(strtoupper($_POST['av_calle']));
$tipo_vivienda = trim(strtoupper($_POST['tipo']));
$numero = trim($_POST['numero_vivienda']);
$planta = trim($_POST['planta']);
$piso = trim($_POST['piso']);
$idparro = trim($_POST['ciudades']);

//experiencia laboral
$nom_empresa = $_POST['nom_empresa'];
$natu_traba = $_POST['natu_trabajo'];
$desde = $_POST['fecha_desde'];
$hasta = $_POST['fecha_hasta'];
$supervi = $_POST['supervisor_empresa'];
$s_inicial = $_POST['saldo_inicial'];
$s_final = $_POST['saldo_final'];
$m_retiro = $_POST['retiro_empresa'];

//tipo de ingreso
$tipo_ingreso = trim($_POST['tipo_ingreso']);

//consultamos a la base de datos para verificar que no exista la persona y poder registrar una nueva
$objPerson->selectPerson($sql='SELECT cedula FROM tpersona WHERE estatus=1 and cedula = '.$ci);
$row = $objPerson->row(); // asigno el valor a la variable row

//validamos si la persona esta o no registrada en la base de datos
if ($ci == $row['cedula']) {
    echo 1; // encontro una persona registrada con la misma cedula
} else{
    //enviamos datos a la clase
    $objPerson->getDatePerson($ci,$pn,$sn,$pa,$sa,$sexo,$fn,$lugar_nac,$edad,$nacionalidad,$lateralidad,$telhabi,$telmovil,$teladic,$correo,$licencia,$fecha_expe,$pantalon,$camisa,$zapatos,$conyuge,$nac_conyuge,$fecha_nac_conyuge,$ocupacion_conyuge,$padre,$nac_padre,$fecha_nac_padre,$ocupacion_padre,$madre,$nac_madre,$fecha_nac_madre,$ocupacion_madre,$aof_inquiport,$aof_area_inquiport,$conoc_empleo,$empleo_ant,$empleo_ant_cuando,$empleo_ant_donde,$idioma,$nom_idioma,$habla_idioma,$escribe_idioma,$sueldo_aspi,$fecha_dispo,$limitacion_geo,$vehiculo,$estado_civil,$tipo_ingreso);
    $objPerson->insertPerson();
    //validamos si la persona se registro o no en la base de datos
    $objPerson->selectPerson($sql='SELECT idpersona,cedula FROM tpersona WHERE estatus=1 and cedula = '.$ci);
    $row = $objPerson->row(); // asigno el valor a la variable row
    $id = $row["idpersona"]; // asignamos el id consultado a la variable id 
    if ($ci == $row['cedula']) {    
        // registro de direccion de la persona
        require '../modelo/m_direccion.php';
        $objeDirection = new class_direction();
        $objeDirection->getDateDirection($ubanismo,$direccion,$tipo_vivienda,$numero,$planta,$piso,$idparro,$id);
        $objeDirection->insertdirection();
        if ($vehiculo == 'SI') {
            include_once '../modelo/m_vehiculos.php';
            $objVehiculo = new class_vehiculo();
            $objVehiculo->getDateVehiculo($marca_vehiculo,$modelo_vehiculo,$version_vehiculo,$transmicion,$cant_cilindros,$titulo_registro,$ano_vehiculo,$color_vehiculo,$num_placa,$num_motor,$num_carroceria,$uso,$id);
            $objVehiculo->insertVehiculo();
        }
        require '../config/config_db.php';
        $connect = mysqli_connect(HOST,USER,PASSWORD,DATABASE);
        $count_dist = count($dist); // cantidad de registros en distinciones acedemicas
        if($count_dist > -1){
            //ciclo para registro de distinciones academicas
	        for($i=0; $i<$count_dist; $i++){
                $dist[$i] = strtoupper($dist[$i]);
		        if(trim($dist[$i]) != ''){
                    $sql = "INSERT INTO tdistin_acade_acti_social (distincion_academica,idpersona) VALUES('$dist[$i]','$id')";
                    mysqli_query($connect, $sql);
		        }
            }
            //ciclo para registro de actividad social
            $count_acti = count($acti); // cantidad de registros en actividad social
            for($i=0; $i<$count_acti; $i++){
                $acti[$i] = strtoupper($acti[$i]);
		        if(trim($acti[$i]) != ''){
                    $sql = "INSERT INTO tactividad_social (actividad_social,idpersona) VALUES('$acti[$i]','$id')";
                    mysqli_query($connect, $sql);
		        }
            }
            //ciclo para registrar hijos de la persona
            $count_hijo = count($nom_hijo); // cantidad de registro de hijos
            for($i=0; $i<$count_hijo; $i++){
                $nom_hijo[$i] = strtoupper($nom_hijo[$i]);
                $sexo_hijo[$i] = strtoupper($sexo_hijo[$i]);
                $naci_hijo[$i] = strtoupper($naci_hijo[$i]);
                $ocupacion_hijo[$i] = strtoupper($ocupacion_hijo[$i]);
		        if(trim($nom_hijo[$i]) != ''){
                    $sql = "INSERT INTO thijos (idpersona,nombre_hijo,sexo_hijo,nacimiento,ci_hijo,ocupacion_hijo) VALUES('$id','$nom_hijo[$i]','$sexo_hijo[$i]','$naci_hijo[$i]','$ci_hijo[$i]','$ocupacion_hijo[$i]')";
                    mysqli_query($connect, $sql);
		        }
            }
            //ciclo para registrar grado academico
            $count_grado = count($nivel_educ); // cantidad de registro de grado de instruccion
            for($i=0; $i<$count_grado; $i++){
                $nivel_educ[$i] = strtoupper($nivel_educ[$i]);
                $institucion[$i] = strtoupper($institucion[$i]);
                $ciudad_grado[$i] = strtoupper($ciudad_grado[$i]);
		        if(trim($nivel_educ[$i]) != ''){
                    $sql = "INSERT INTO tgrado_instruccion (idpersona,nivel,institucion,ciudad,desde_hasta,anos_culminados) VALUES ('$id','$nivel_educ[$i]','$institucion[$i]','$ciudad_grado[$i]','$desde_hasta[$i]','$anos_culminacion[$i]')";
                    mysqli_query($connect, $sql);
		        }
            }
            //ciclo para registrar area de interes
            $count_area = count($area_inte); // cantidad de registro de area interes
            for($i=0; $i<$count_area; $i++){
                $area_inte[$i] = strtoupper($area_inte[$i]);
		        if(trim($area_inte[$i]) != ''){
                    $sql = "INSERT INTO tarea_interes (idpersona,area_interes) VALUES ('$id','$area_inte[$i]')";
                    mysqli_query($connect, $sql);
		        }
            }
            //ciclo para registrar conocimiento ofimatico
            $count_ofi = count($area_ofim); // cantidad de registro de conocimiento ofimaticos
            for($i=0; $i<$count_ofi; $i++){
                $area_ofim[$i] = strtoupper($area_ofim[$i]);
		        if(trim($area_ofim[$i]) != ''){
                    $sql = "INSERT INTO tconocimiento_ofimatico (idpersona,conocimiento_ofimatico) VALUES ('$id','$area_ofim[$i]')";
                    mysqli_query($connect, $sql);
		        }
            }
            //ciclo para registrar referencias personales
            $count_refe = count($nom_ape_refe); // cantidad de registro de referencias personales
            for($i=0; $i<$count_refe; $i++){
                $nom_ape_refe[$i] = strtoupper($nom_ape_refe[$i]);
                $ocupacion_refe[$i] = strtoupper($ocupacion_refe[$i]);
                $compania_refe[$i] = strtoupper($compania_refe[$i]);
		        if(trim($nom_ape_refe[$i]) != ''){
                    $sql = "INSERT INTO treferencias (idpersona,nombre_apellido,telefono,ocupacion,compañia) VALUES ('$id','$nom_ape_refe[$i]','$telefono_refe[$i]','$ocupacion_refe[$i]','$compania_refe[$i]')";
                    mysqli_query($connect, $sql);
		        }
            }
            //ciclo para registrar experiencia laboral
            $count_labo = count($nom_empresa); // cantidad de registro de referencias personales
            for($i=0; $i<$count_labo; $i++){
                $nom_empresa[$i]  = strtoupper($nom_empresa[$i]);
                $natu_traba[$i]  = strtoupper($natu_traba[$i]);
                $desde[$i]  = strtoupper($desde[$i]);
                $hasta[$i]  = strtoupper($hasta[$i]);
                $supervi[$i]  = strtoupper($supervi[$i]);
                $s_inicial[$i]  = strtoupper($s_inicial[$i]);
                $s_final[$i]  = strtoupper($s_final[$i]);
                $m_retiro[$i]  = strtoupper($m_retiro[$i]);

		        if(trim($nom_empresa[$i]) != ''){
                    $sql = "INSERT INTO texperiencia_laboral (idpersona,empresa,fecha_desde,fecha_hasta,ingreso_mensual_inicial,ingreso_mensual_final,cargo,supervisor_inmediato,razon_salida) VALUES ('$id','$nom_empresa[$i]','$desde[$i]','$hasta[$i]','$s_inicial[$i]','$s_final[$i]','$natu_traba[$i]','$supervi[$i]','$m_retiro[$i]')";
                    mysqli_query($connect, $sql);
		        }
	        }
        }
        echo 2;
    } else{
        echo false; // no se registro en la base de datos
    }

}

?>
