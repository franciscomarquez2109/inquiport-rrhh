<?php

/*IMPORTAMOS EL ARCHIVO PHP QUE CONTIENE LA CONEXION A LA BASE DE DATOS*/
include_once ('conexion.php');
/*===================================*/

class class_statusCivil extends bd {
	public $idestado_civil;
	public $estado_civil;
	public $estatus;

	function __construct(){
		$this->mydb();
		$this->idestado_civil = "";
		$this->estado_civil = "";
	}

/*FUNCION PARA MODIFICAR clave*/
public function selectstatusCivil(){
	$sql = "SELECT * FROM testado_civil WHERE estatus = 1";
	$this->ejecutar($sql);
	
}
}


?>