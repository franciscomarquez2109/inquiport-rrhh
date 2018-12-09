<?php

/*IMPORTAMOS EL ARCHIVO PHP QUE CONTIENE LA CONEXION A LA BDepen DE DATOS*/
include_once ('conexion.php');
/*===================================*/

class class_MontoDependent extends bd {

	public $monto_prima_dependiente;
	public $mes_prima_dependiente;
	public $monto_dependiente;
    public $monto_empleado_dependiente;
    public $monto_empresa_dependiente;
    public $fecha_corte_dependiente;
    public $iddependiente;
	
	function __construct(){
		$this->mydb();
        $this->monto_prima_dependiente = "";
        $this->mes_prima_dependiente = "";
        $this->monto_dependiente = "";
        $this->monto_empleado_dependiente = "";
        $this->monto_empresa_dependiente = "";
        $this->fecha_corte_dependiente = "";
        $this->iddependiente = "";
	}

	function getDateMontoDependent($mon_prima_Depen,$mes_prima_Depen,$mon_Depen,$mon_emple_Depen,$mon_empre_Depen,$fecha_corte_Depen,$id){
        $this->monto_prima_dependiente = $mon_prima_Depen;
        $this->mes_prima_dependiente = $mes_prima_Depen;
        $this->monto_dependiente = $mon_Depen;
        $this->monto_empleado_dependiente = $mon_emple_Depen;
        $this->monto_empresa_dependiente = $mon_empre_Depen;
        $this->fecha_corte_dependiente = $fecha_corte_Depen;
        $this->iddependiente = $id;
	}

/*FUNCION PARA REGISTRAR*/
public function insertMontoDependent() {
	$sql = "INSERT INTO tmontos_dependiente (monto_prima_dependiente,mes_prima_dependiente,monto_dependiente,monto_empleado_dependiente,monto_empresa_dependiente,fecha_corte_dependiente,iddependiente) VALUES ('$this->monto_prima_dependiente','$this->mes_prima_dependiente','$this->monto_dependiente','$this->monto_empleado_dependiente','$this->monto_empresa_dependiente','$this->fecha_corte_dependiente','$this->iddependiente')";
	$this->ejecutar($sql);
}

public function selectMontoDependent($sql){
	$sql = $sql;
	$this->ejecutar($sql);
}

public function updateMontoDependent($sql){
	$sql = $sql;
	$this->ejecutar($sql);
}

}
/*===================================*/

?>
