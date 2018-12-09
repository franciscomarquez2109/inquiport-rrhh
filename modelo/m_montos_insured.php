<?php

/*IMPORTAMOS EL ARCHIVO PHP QUE CONTIENE LA CONEXION A LA BASE DE DATOS*/
include_once ('conexion.php');
/*===================================*/

class class_MontoInsured extends bd {

	public $monto_prima_asegurado;
	public $mes_prima_asegurado;
	public $monto_asegurado;
    public $monto_empleado_asegurado;
    public $monto_empresa_asegurado;
    public $fecha_corte_asegurado;
    public $idasegurado;
	
	function __construct(){
		$this->mydb();
        $this->monto_prima_asegurado = "";
        $this->mes_prima_asegurado = "";
        $this->monto_asegurado = "";
        $this->monto_empleado_asegurado = "";
        $this->monto_empresa_asegurado = "";
        $this->fecha_corte_asegurado = "";
        $this->idasegurado = "";
	}

	function getDateMontoInsured($mon_prima_ase,$mes_prima_ase,$mon_ase,$mon_emple_ase,$mon_empre_ase,$fecha_corte_ase,$id){
        $this->monto_prima_asegurado = $mon_prima_ase;
        $this->mes_prima_asegurado = $mes_prima_ase;
        $this->monto_asegurado = $mon_ase;
        $this->monto_empleado_asegurado = $mon_emple_ase;
        $this->monto_empresa_asegurado = $mon_empre_ase;
        $this->fecha_corte_asegurado = $fecha_corte_ase;
        $this->idasegurado = $id;
	}

/*FUNCION PARA REGISTRAR*/
public function insertMontoInsured() {
	$sql = "INSERT INTO tmontos_asegurado (monto_prima_asegurado,mes_prima_asegurado,monto_asegurado,monto_empleado_asegurado,monto_empresa_asegurado,fecha_corte_asegurado,idasegurado) VALUES ('$this->monto_prima_asegurado','$this->mes_prima_asegurado','$this->monto_asegurado','$this->monto_empleado_asegurado','$this->monto_empresa_asegurado','$this->fecha_corte_asegurado','$this->idasegurado')";
	$this->ejecutar($sql);
}

public function selectMontoInsured($sql){
	$sql = $sql;
	$this->ejecutar($sql);
}

public function updateMontoInsured($sql){
	$sql = $sql;
	$this->ejecutar($sql);
}

}
/*===================================*/

?>
