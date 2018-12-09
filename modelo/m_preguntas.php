<?php

/*IMPORTAMOS EL ARCHIVO PHP QUE CONTIENE LA CONEXION A LA BASE DE DATOS*/
include_once ('conexion.php');
/*===================================*/

class questions extends bd {
	public $idusuario_preguntas;
	public $pregunta1;
	public $pregunta2;
	public $respuesta1;
	public $respuesta2;
	
	function __construct(){
		$this->mydb();
		$this->idusuario_preguntas = "";
		$this->pregunta1 = "";
		$this->pregunta2 = "";
		$this->respuesta1 = "";
		$this->respuesta2 = "";
	}

/*FUNCION PARA REGISTRAR*/
	public function insertQuestions() {
		$sql = "INSERT INTO tusuario_clave () VALUES ()";
		$this->ejecutar($sql);
		$this->cerrar();
	}
/*===================================*/

/*FUNCION PARA MODIFICAR clave*/
public function selectQuestions($user){
	$sql = "SELECT * FROM tusuario_preguntas pre WHERE pre.idusuario_preguntas = (SELECT idusuario FROM tusuario WHERE estatus = 1 AND usuario = '$user')";
	$this->ejecutar($sql);
}
}


?>