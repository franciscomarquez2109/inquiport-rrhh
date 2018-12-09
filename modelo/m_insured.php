<?php

/*IMPORTAMOS EL ARCHIVO PHP QUE CONTIENE LA CONEXION A LA BASE DE DATOS*/
include_once ('conexion.php');
/*===================================*/

class class_Insured extends bd {
	public $idasegurado;
	public $idpersona;
	public $idtipo_nomina; //NULL
	public $iddepartamento;
	public $maternidad; //NULL
	
	function __construct(){
		$this->mydb();
		$this->idasegurado = "";
		$this->idpersona = "";
		$this->idtipo_nomina = 0;
		$this->iddepartamento = 0;
		$this->maternidad = 0;
	}

	function getDateInsured($id,$nomina,$depart,$mater){
		$this->idpersona = $id;
		$this->idtipo_nomina = $nomina;
		$this->iddepartamento = $depart;
		$this->maternidad = $mater;
	}

/*FUNCION PARA REGISTRAR*/
public function insertInsured() {
	$sql = "INSERT INTO tasegurado (idpersona,idtipo_nomina,iddepartamento,maternidad) VALUES ('$this->idpersona','$this->idtipo_nomina','$this->iddepartamento','$this->maternidad')";
	$this->ejecutar($sql);
}

public function selectInsured($sql){
	$sql = $sql;
	$this->ejecutar($sql);
}

public function updateInsured($sql){
	$sql = $sql;
	$this->ejecutar($sql);
}

}
/*===================================*/

?>
