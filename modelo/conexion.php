<?php

#=========================================
#CLASE PARA LA CONEXION A LA BASE DE DATOS
#=========================================

class bd{
	private $DB_HOST;
	private $DB_NAME;
	private $DB_USER;
	private $DB_PASS;

	protected function mydb(){
		require '../config/config_db.php';
		$this->DB_HOST = HOST;
		$this->DB_NAME = DATABASE;
		$this->DB_USER = USER;
		$this->DB_PASS = PASSWORD;
	}
	#conectarse a la base de datos:
	function conectar() {
		$this->con = mysqli_connect($this->DB_HOST,$this->DB_USER,$this->DB_PASS,$this->DB_NAME);
		if ($this->con){
			return true;
		}
		else{
			die( "No se puede conectar a la base de datos: " . mysql_error() );
		}
	}
	#=========================================================

	# ejecutar la consulta:
	protected function ejecutar($sql){
		$this->conectar();
		$this->res = mysqli_query($this->con,$sql);
		return $this->res;
	}
	#=========================================================
	# resultado del Query:
	public function row(){
		return mysqli_fetch_array($this->res);
	}
	#================================================================
	# cerrar conexion:
	public function close(){
		return mysqli_close($this->con);
	}
	#================================================================
	
	
}

?>