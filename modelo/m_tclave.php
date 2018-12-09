<?php

/*IMPORTAMOS EL ARCHIVO PHP QUE CONTIENE LA CONEXION A LA BASE DE DATOS*/
include_once ('conexion.php');
/*===================================*/

class userPass extends bd {
	public $idusuario_clave;
	public $clave;
	public $fecha_inicio;
	public $fecha_fin;
	public $clave_anterior;
	
	function __construct(){
		$this->mydb();
		$this->idusuario_clave = "";
		$this->clave = "";
		$this->fecha_inicio = "";
		$this->fecha_fin = "";
		$this->clave_anterior = "";
		
	}

/*FUNCION PARA REGISTRAR*/
	public function insertUserPass() {
		$sql = "INSERT INTO tusuario_clave () VALUES ()";
		$this->ejecutar($sql);
		$this->cerrar();
	}
/*===================================*/

/*FUNCION PARA MODIFICAR clave*/
public function updateUserPass($user){
	$sql = "UPDATE tusuario_clave SET clave ='$this->clave',clave_anterior ='$this->clave_anterior',fecha_fin = '$this->fecha_fin' WHERE idusuario_clave = (SELECT idusuario_clave FROM tusuario WHERE usuario = '$user')";
	$this->ejecutar($sql);
}

/*FUNCION PARA consultar*/
public function selectUserPass($user){
	$sql = "SELECT * FROM tusuario_clave WHERE idusuario_clave = (SELECT idusuario_clave FROM tusuario WHERE usuario = '$user')";
	$this->ejecutar($sql);
}
}


?>