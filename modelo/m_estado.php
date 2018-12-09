<?php

/*IMPORTAMOS EL ARCHIVO PHP QUE CONTIENE LA CONEXION A LA BASE DE DATOS*/
include_once ('conexion.php');
/*===================================*/

class class_estado extends bd {
	public $idestado;
    public $estado;
   
	function __construct(){
		$this->mydb();
		$this->idestado = "";
        $this->estado = "";
    }

/*FUNCION PARA MODIFICAR clave*/
public function selectestado($sql){
	$sql = $sql;
	$this->ejecutar($sql);
	
}
}


?>