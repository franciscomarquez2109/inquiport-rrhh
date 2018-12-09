<?php

/*IMPORTAMOS EL ARCHIVO PHP QUE CONTIENE LA CONEXION A LA BASE DE DATOS*/
include_once ('conexion.php');
/*===================================*/

class class_direction extends bd {
	public $urbanismo;
    public $direccion_domicilio;
    public $tipo_vivienda;
    public $numero;
    public $planta;
    public $piso;
    public $parroquia;
    public $idpersona;
    


	function __construct(){
		$this->mydb();
		$this->urbanismo = "";
        $this->direccion_domicilio = "";
        $this->tipo_vivienda = "";
        $this->numero = "";
        $this->planta = "";
        $this->piso = "";
        $this->parroquia = "";
        $this->idpersona = "";
    }

    function getDateDirection($urb,$direc,$vivienda,$num,$planta,$piso,$parro,$idper){
		$this->urbanismo = $urb;
        $this->direccion_domicilio = $direc;
        $this->tipo_vivienda = $vivienda;
        $this->numero = $num;
        $this->planta = $planta;
        $this->piso = $piso;
        $this->parroquia = $parro;
        $this->idpersona = $idper;
	}

/*FUNCION PARA REGISTRAR*/
	public function insertdirection() {
		$sql = "INSERT INTO tdireccion (urbanismo,direccion_domicilio,tipo_vivienda,numero,planta,piso,parroquia,idpersona) VALUES ('$this->urbanismo','$this->direccion_domicilio','$this->tipo_vivienda','$this->numero','$this->planta','$this->piso','$this->parroquia','$this->idpersona')";
		$this->ejecutar($sql);
	}
/*===================================*/

/*FUNCION PARA MODIFICAR clave*/
public function selectdirection($sql){
	$sql = $sql;
	$this->ejecutar($sql);
	
}
}


?>