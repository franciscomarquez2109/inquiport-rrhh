<?php

/*IMPORTAMOS EL ARCHIVO PHP QUE CONTIENE LA CONEXION A LA BASE DE DATOS*/
include_once ('conexion.php');
/*===================================*/

class departamento extends bd {
	public $iddepartamento;
	public $departamento;
	public $estatus;
	
	function __construct(){
		$this->mydb();
		$this->iddepartamento = "";
		$this->departamento = "";
		$this->estatus = "";
		
	}

/*FUNCION PARA REGISTRAR*/
	public function setdepartamento($iddepar,$depart,$esta){
		$this->idusuario = $iddepar;
		$this->idfuncionario = $depart;
		$this->idusuario_clave = $esta;
		
	}
/*FUNCION PARA REGISTRAR*/
	public function insertdepartamento() {
		$sql = "INSERT INTO tdepartamento (departamento,estatus) VALUES ('$this->departamento','$this->estatus')";
		$this->ejecutar($sql);
		$this->cerrar();
	}
/*===================================*/


/*FUNCION PARA CONSULTAR*/
	public function selectdepartamento(){
		$sql = "SELECT * FROM tdepartamento d WHERE d.estatus = 1";
		$this->ejecutar($sql);
		$this->cerrar();
		}
	}
/*===================================*/

?>