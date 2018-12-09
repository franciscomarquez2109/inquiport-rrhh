<?php

/*IMPORTAMOS EL ARCHIVO PHP QUE CONTIENE LA CONEXION A LA BASE DE DATOS*/
include_once ('conexion.php');
/*===================================*/

class class_Municipio extends bd {
	public $idmunicipio;
    public $idestado;
    public $municipio;
   
	function __construct(){
		$this->mydb();
		$this->idmunicipio = "";
        $this->idestado = "";
        $this->municipio = "";
        
    }

/*FUNCION PARA MODIFICAR clave*/
public function selectMunicipio($sql){
	$sql = $sql;
	$this->ejecutar($sql);
	
}
}


?>