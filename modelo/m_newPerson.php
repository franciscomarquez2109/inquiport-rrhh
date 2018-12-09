<?php

/*IMPORTAMOS EL ARCHIVO PHP QUE CONTIENE LA CONEXION A LA BASE DE DATOS*/
include_once ('conexion.php');
/*===================================*/

class class_person extends bd {
	public $idpersona;
	public $cedula;
	public $nombre1;
	public $nombre2; //NULL
	public $apellido1;
	public $apellido2; //NULL
	public $sexo;
	public $fecha_nac;
	public $lugar_nac;
	public $edad;
	public $nacionalidad;
	public $lateralidad;
	public $t_habitacion;
	public $t_movil;
	public $t_adicional; //NULL
	public $correo;
	public $l_conducir;
	public $f_expedicion;
	public $pantalon;
	public $camisa;
	public $zapato;
	public $nom_conyuge; //NULL
	public $naci_conyuge; //NULL
	public $fecha_nac_conyuge; //NULL
	public $ocupacion_conyuge; //NULL
	public $nom_padre;
	public $naci_padre;
	public $fecha_nac_padre;
	public $ocupacion_padre;
	public $nom_madre;
	public $naci_madre;
	public $af_inquiport;  //NULL
	public $area_af_inquiport;  //NULL
	public $conocimiento_empleo;
	public $solicitud_anterior; //NULL
	public $fecha_solicitud_anterior; //NULL
	public $solicitud_anterior_donde; //NULL
	public $idioma; //NULL
	public $nom_idioma; //NULL
	public $habla_idioma; //NULL
	public $escribe_idioma; //NULL
	public $sueldo_aspirado; //NULL
	public $fecha_disponible;
	public $limitacion_geografica;
	public $posee_vehiculo; //NULL
	public $idestado_civil;
	public $fecha_nac_madre;
	public $idingreso;
	public $estatus;


	function __construct(){
		$this->mydb();
		$this->idpersona = "";
		$this->cedula = "";
		$this->nombre1 = "";
		$this->nombre2 = "";
		$this->apellido1 = "";
		$this->apellido2 = "";
		$this->sexo = 0;
		$this->fecha_nac = 0;
		$this->lugar_nac = 0;
		$this->edad = 0;
		$this->nacionalidad = "";
		$this->lateralidad = "";
		$this->t_habitacion = "";
		$this->t_movil = "";
		$this->t_adicional = "";
		$this->correo = "";
		$this->l_conducir = "";
		$this->pantalon = "";
		$this->camisa = "";
		$this->zapato = "";
		$this->nom_conyuge = "";
		$this->naci_conyuge = "";
		$this->fecha_nac_conyuge = "";
		$this->ocupacion_conyuge = "";
		$this->nom_padre = "";
		$this->naci_padre = "";
		$this->fecha_nac_padre = "";
		$this->ocupacion_padre = "";
		$this->nom_madre = "";
		$this->naci_madre = "";
		$this->fecha_nac_madre = "";
		$this->ocupacion_madre = "";
		$this->af_inquiport = "";
		$this->area_af_inquiport = "";
		$this->conocimiento_empleo = "";
		$this->solicitud_anterior = "";
		$this->fecha_solicitud_anterior = "";
		$this->solicitud_anterior_donde = "";
		$this->idioma = "";
		$this->nom_idioma = "";
		$this->habla_idioma = "";
		$this->escribe_idioma = "";
		$this->sueldo_aspirado = "";
		$this->fecha_disponible = "";
		$this->limitacion_geografica = "";
		$this->posee_vehiculo = "";
		$this->idestado_civil = "";
		$this->idingreso = "";
		$this->estatus = 0;
	}

	function getDatePerson($ci,$pn,$sn,$pa,$sa,$sexo,$fn,$lugar_nac,$edad,$nacionalidad,$lateralidad,$telhabi,$telmovil,$teladic,$correo,$licencia,$fecha_expe,$pantalon,$camisa,$zapatos,$conyuge,$nac_conyuge,$fecha_nac_conyuge,$ocupacion_conyuge,$padre,$nac_padre,$fecha_nac_padre,$ocupacion_padre,$madre,$nac_madre,$fecha_nac_madre,$ocupacion_madre,$aof_inquiport,$aof_area_inquiport,$conoc_empleo,$empleo_ant,$empleo_ant_cuando,$empleo_ant_donde,$idioma,$nom_idioma,$habla_idioma,$escribe_idioma,$sueldo_aspi,$fecha_dispo,$limitacion_geo,$vehiculo,$estado_civil,$tipo_ingreso){
		$this->cedula = $ci;
		$this->nombre1 = $pn;
		$this->nombre2 = $sn;
		$this->apellido1 = $pa;
		$this->apellido2 = $sa;
		$this->sexo = $sexo;
		$this->fecha_nac = $fn;
		$this->lugar_nac = $lugar_nac;
		$this->edad = $edad;
		$this->nacionalidad = $nacionalidad;
		$this->lateralidad = $lateralidad;
		$this->t_habitacion = $telhabi;
		$this->t_movil = $telmovil;
		$this->t_adicional = $teladic;
		$this->correo = $correo;
		$this->l_conducir = $licencia;
		$this->f_expedicion = $fecha_expe;
		$this->pantalon = $pantalon;
		$this->camisa = $camisa;
		$this->zapato = $zapatos;
		$this->nom_conyuge = $conyuge;
		$this->naci_conyuge = $nac_conyuge;
		$this->fecha_nac_conyuge = $fecha_nac_conyuge;
		$this->ocupacion_conyuge = $ocupacion_conyuge;
		$this->nom_padre = $padre;
		$this->naci_padre = $nac_padre;
		$this->fecha_nac_padre = $fecha_nac_padre;
		$this->ocupacion_padre = $ocupacion_padre;
		$this->nom_madre = $madre;
		$this->naci_madre = $nac_madre;
		$this->fecha_nac_madre = $fecha_nac_madre;
		$this->ocupacion_madre = $ocupacion_madre;
		$this->af_inquiport = $aof_inquiport;
		$this->area_af_inquiport = $aof_area_inquiport;
		$this->conocimiento_empleo = $conoc_empleo;
		$this->solicitud_anterior = $empleo_ant;
		$this->fecha_solicitud_anterior = $empleo_ant_cuando;
		$this->solicitud_anterior_donde = $empleo_ant_donde;
		$this->idioma = $idioma;
		$this->nom_idioma = $nom_idioma;
		$this->habla_idioma = $habla_idioma;
		$this->escribe_idioma = $escribe_idioma;
		$this->sueldo_aspirado = $sueldo_aspi;
		$this->fecha_disponible = $fecha_dispo;
		$this->limitacion_geografica = $limitacion_geo;
		$this->posee_vehiculo = $vehiculo;
		$this->idestado_civil = $estado_civil;
		$this->idingreso = $tipo_ingreso;
	}

/*FUNCION PARA REGISTRAR*/
public function insertPerson() {
	$sql = "INSERT INTO tpersona (cedula,nombre1,nombre2,apellido1,apellido2,sexo,fecha_nac,lugar_nac,edad,nacionalidad,lateralidad,t_habitacion,t_movil,t_adicional,correo,l_conducir,f_expedicion,pantalon,camisa,zapato,nom_conyuge,naci_conyuge,fecha_nac_conyuge,ocupacion_conyuge,nom_padre,naci_padre,fecha_nac_padre,ocupacion_padre,nom_madre,naci_madre,fecha_nac_madre,ocupacion_madre,af_inquiport,area_af_inquiport,conocimiento_empleo,solicitud_anterior,fecha_solicitud_anterior,solicitud_anterior_donde,idioma,nom_idioma,habla_idioma,sueldo_aspirado,fecha_disponible,limitacion_geografica,posee_vehiculo,idestado_civil,idingreso) VALUES ('$this->cedula','$this->nombre1','$this->nombre2','$this->apellido1','$this->apellido2','$this->sexo','$this->fecha_nac','$this->lugar_nac','$this->edad','$this->nacionalidad','$this->lateralidad','$this->t_habitacion','$this->t_movil','$this->t_adicional','$this->correo','$this->l_conducir','$this->f_expedicion','$this->pantalon','$this->camisa','$this->zapato','$this->nom_conyuge','$this->naci_conyuge','$this->fecha_nac_conyuge','$this->ocupacion_conyuge','$this->nom_padre','$this->naci_padre','$this->fecha_nac_padre','$this->ocupacion_padre','$this->nom_madre','$this->naci_madre','$this->fecha_nac_madre','$this->ocupacion_madre','$this->af_inquiport','$this->area_af_inquiport','$this->conocimiento_empleo','$this->solicitud_anterior','$this->fecha_solicitud_anterior','$this->solicitud_anterior_donde','$this->idioma','$this->nom_idioma','$this->habla_idioma','$this->sueldo_aspirado','$this->fecha_disponible','$this->limitacion_geografica','$this->posee_vehiculo','$this->idestado_civil','$this->idingreso')";
	$this->ejecutar($sql);
}

public function selectPerson($sql){
	$sql = $sql;
	$this->ejecutar($sql);
}

}
/*===================================*/

?>
