<?php

/*IMPORTAMOS EL ARCHIVO PHP QUE CONTIENE LA CONEXION A LA BASE DE DATOS*/
include_once ('conexion.php');
/*===================================*/

class class_distiAcademy extends bd {
	public $iddistin_acade_acti_social;
	public $distincion_academica;
    public $idpersona;
	
	function __construct(){
		$this->mydb();
		$this->$iddistin_acade_acti_social = "";
		$this->distincion_academica = "";
		$this->idpersona = "";
	}

    function getDateAcademy($dist,$idpersona){
		$this->distincion_academica = $dist;
        $this->idpersona = $idpersona;
        
    }
/*FUNCION PARA REGISTRAR*/
	public function insertDistiAcademy() {
		$sql = "INSERT INTO tdistin_acade_acti_social (distincion_academica,idpersona) VALUES ('$this->distincion_academica','$this->idpersona')";
		$this->ejecutar($sql);
		$this->cerrar();
	}
/*===================================*/
/*FUNCION PARA consultar*/
public function selectDistiAcademy(){
	$sql = "";
	$this->ejecutar($sql);
}
}


?>