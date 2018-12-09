<?php

/*IMPORTAMOS EL ARCHIVO PHP QUE CONTIENE LA CONEXION A LA BASE DE DATOS*/
include_once ('conexion.php');
/*===================================*/

class class_vehiculo extends bd {
	public $idvehiculo;
    public $marca;
    public $modelo;
    public $versiones;
    public $tipo_caja;
    public $cilindros;
    public $titulo_registro;
    public $ano;
    public $color;
    public $placa;
    public $serial_motor;
    public $serial_carroceria;
    public $uso;
    public $idpersona;
   
	function __construct(){
		$this->mydb();
		$this->idvehiculo = "";
        $this->marca = "";
        $this->modelo = "";
        $this->versiones = "";
        $this->tipo_caja = "";
        $this->cilindros = "";
        $this->titulo_registro = "";
        $this->ano = "";
        $this->color = "";
        $this->placa = "";
        $this->serial_motor = "";
        $this->serial_carroceria = "";
        $this->uso = "";
        $this->idpersona = "";
    }
    function getDateVehiculo($mar,$mode,$ver,$tran,$cilin,$regis,$ano_ve,$color_ve,$placa,$motor,$carro,$uso,$id){
        $this->marca = $mar;
        $this->modelo = $mode;
        $this->versiones = $ver;
        $this->tipo_caja = $tran;
        $this->cilindros = $cilin;
        $this->titulo_registro = $regis;
        $this->ano = $ano_ve;
        $this->color = $color_ve;
        $this->placa = $placa;
        $this->serial_motor = $motor;
        $this->serial_carroceria = $carro;
        $this->uso = $uso;
        $this->idpersona = $id;
    }
/*FUNCION PARA MODIFICAR clave*/
public function insertVehiculo(){
	$sql = "INSERT INTO tvehiculo (marca,modelo,versiones,tipo_caja,cilindros,titulo_registro,ano,color,placa,serial_motor,serial_carroceria,uso,idpersona) VALUES ('$this->marca','$this->modelo','$this->versiones','$this->tipo_caja','$this->cilindros','$this->titulo_registro','$this->ano','$this->color','$this->placa','$this->serial_motor','$this->serial_carroceria','$this->uso','$this->idpersona')";
	$this->ejecutar($sql);
	
}
/*FUNCION PARA MODIFICAR clave*/
public function selectVehiculo($sql){
	$sql = $sql;
	$this->ejecutar($sql);
	
}

}


?>