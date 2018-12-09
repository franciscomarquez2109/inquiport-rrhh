<?php

/*IMPORTAMOS EL ARCHIVO PHP QUE CONTIENE LA CONEXION A LA BASE DE DATOS*/
include_once ('conexion.php');
/*===================================*/

class class_parroquia extends bd {
	public $idparroquia;
    public $idmunicipio;
    public $parroquia;
   
	function __construct(){
		$this->mydb();
		$this->idparroquia = "";
        $this->idmunicipio = "";
        $this->parroquia = "";
        
    }

/*FUNCION PARA MODIFICAR clave*/
public function selectdirection($sql){
	$sql = $sql;
	$this->ejecutar($sql);
	
}
}


?>