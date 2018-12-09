<?php

/*IMPORTAMOS EL ARCHIVO PHP QUE CONTIENE LA CONEXION A LA BASE DE DATOS*/
include_once ('conexion.php');
/*===================================*/

class class_tablePrima extends bd {
	public $idtabla_prima;
    public $numero;
    public $sexo;
    public $maternidad;
    public $hasta25;
    public $edad_min;
    public $edad_max;
    public $prima_semanal;
    public $prima_quincenal;
    public $prima_ejecutivo;
    public $descripcion;
    public $fecha_inicio;
    public $fecha_final;
    public $estatus;
   
	function __construct(){
		$this->mydb();
		$this->idtabla_prima = "";
        $this->numero = "";
        $this->sexo = "";
        $this->maternidad = "";
        $this->hasta25 = "";
        $this->edad_min = "";
        $this->edad_max = "";
        $this->prima_semanal = "";
        $this->prima_quincenal = "";
        $this->prima_ejecutivo = "";
        $this->descripcion = "";
        $this->fecha_inicio = "";
        $this->fecha_final = "";
        $this->estatus = "";   
    }

/*FUNCION PARA MODIFICAR clave*/
public function selectTablePrima($sql){
	$sql = $sql;
	$this->ejecutar($sql);
	
}
}


?>