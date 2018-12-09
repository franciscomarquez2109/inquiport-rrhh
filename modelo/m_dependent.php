<?php

/*IMPORTAMOS EL ARCHIVO PHP QUE CONTIENE LA CONEXION A LA BASE DE DATOS*/
include_once ('conexion.php');
/*===================================*/

class class_Dependent extends bd {
	public $idasegurado; 
	public $cedula;
	public $nombre1; 
	public $nombre2;
    public $apellido1;
    public $apellido2;
    public $sexo;
    public $fecha_nac;
    public $edad;
    public $maternidad;
    public $idparentesco;
    public $idestado_civil;
    public $hijos_hasta_25;
	
	function __construct(){
		$this->mydb();
	    $this->idasegurado = "";
	    $this->cedula = "";
	    $this->nombre1 = "";
	    $this->nombre2 = "";
        $this->apellido1 = "";
        $this->apellido2 = "";
        $this->sexo = "";
        $this->fecha_nac = "";
        $this->edad = "";
        $this->maternidad = "";
        $this->idparentesco = "";
        $this->idestado_civil = "";
        $this->hijos_hasta_25 = "";
	}

	function getDateDependent($id,$ci,$n1,$n2,$a1,$a2,$sexo,$fn,$edad,$mater,$parent,$ec,$h25){
	    $this->idasegurado = $id; 
	    $this->cedula = $ci;
	    $this->nombre1 = $n1;
	    $this->nombre2 = $n2;
        $this->apellido1 = $a1;
        $this->apellido2 = $a2;
        $this->sexo = $sexo;
        $this->fecha_nac = $fn;
        $this->edad = $edad;
        $this->maternidad = $mater;
        $this->idparentesco = $parent;
        $this->idestado_civil = $ec;
        $this->hijos_hasta_25 = $h25;
	}

/*FUNCION PARA REGISTRAR*/
public function insertDependent() {
	$sql = "INSERT INTO tdependiente (`idasegurado`, `cedula`, `nom1`, `nom2`, `ape1`, `ape2`, `sexo`, `fecha_nac`, `edad`, `maternidad`, `idparentesco`, `idestado_civil`, `hijos_hasta_25`) VALUES ('$this->idasegurado','$this->cedula','$this->nombre1','$this->nombre2','$this->apellido1','$this->apellido2','$this->sexo','$this->fecha_nac','$this->edad','$this->maternidad','$this->idparentesco','$this->idestado_civil','$this->hijos_hasta_25')";
	$this->ejecutar($sql);
}

public function selectDependent($sql){
	$sql = $sql;
	$this->ejecutar($sql);
}

public function updateDependent($sql){
	$sql = $sql;
	$this->ejecutar($sql);
}

}
/*===================================*/

?>
