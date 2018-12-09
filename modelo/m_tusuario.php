<?php

/*IMPORTAMOS EL ARCHIVO PHP QUE CONTIENE LA CONEXION A LA BASE DE DATOS*/
include_once ('conexion.php');
/*===================================*/

class user extends bd {
	public $idusuario;
	public $idusuario_clave;
	public $idusuario_preguntas;
	public $idusuario_perfil;
	public $departamento;
	public $usuario;
	public $inicio_sesion;
	public $primer_inicio;
	public $bloqueado;
	public $intentos_fallidos;
	public $fecha_creacion;
	public $fecha_final;
	public $hora_salida;
	public $fecha_salida;

	function __construct(){
		$this->mydb();
		$this->idusuario = "";
		$this->idusuario_clave = "";
		$this->idusuario_preguntas = "";
		$this->idusuario_perfil = "";
		$this->departamento = "";
		$this->usuario = "";
		$this->inicio_sesion = 0;
		$this->primer_inicio = 0;
		$this->bloqueado = 0;
		$this->intentos_fallidos = 0;
		$this->fecha_creacion = "";
		$this->fecha_final = "";
		$this->hora_salida = "";
		$this->fecha_salida = "";
	}

/*FUNCION PARA REGISTRAR*/
	public function insertUser() {
		$sql = "INSERT INTO tusuario (idusuario_clave,idusuario_preguntas,idusuario_perfil,departamento,usuario,inicio_sesion,primer_inicio,bloqueado,intentos_fallidos,fecha_creacion,fecha_final,hora_salida,fecha_salida,estatus) VALUES ('$this->idusuario_clave','$this->idusuario_preguntas','$this->idusuario_perfil','$this->departamento','$this->usuario','$this->inicio_sesion','$this->primer_inicio','$this->bloqueado','$this->intentos_fallidos','$this->fecha_creacion','$this->fecha_final','$this->hora_salida','$this->fecha_salida','$this->estatus')";
		$this->ejecutar($sql);
	}
/*===================================*/

/*FUNCION PARA MODIFICAR BLOQUEO*/
public function updateUserBlock(){
	$sql = "UPDATE tusuario u SET u.bloqueado = '$this->bloqueado' WHERE u.estatus = 1 and u.usuario = '$this->usuario'";
	$this->ejecutar($sql);
}
/*FUNCION PARA MODIFICAR INTENTOS FALLIDOS*/
public function updateUserInt(){
	$sql = "UPDATE tusuario u SET u.intentos_fallidos = '$this->intentos_fallidos' WHERE u.estatus = 1 and u.usuario = '$this->usuario'";
	$this->ejecutar($sql);
}
/*FUNCION PARA MODIFICAR INICIO DE SESION*/
public function updateUserIniSesion(){
	$sql = "UPDATE tusuario u SET u.inicio_sesion = '$this->inicio_sesion' WHERE u.estatus = 1 and u.usuario = '$this->usuario'";
	$this->ejecutar($sql);
}
/*FUNCION PARA MODIFICAR INICIO DE SESION*/
public function updateUserPi(){
	$sql = "UPDATE tusuario u SET u.primer_inicio = '$this->primer_inicio' WHERE u.estatus = 1 and u.usuario = '$this->usuario'";
	$this->ejecutar($sql);
}

/*FUNCION PARA CONSULTAR*/
	public function selectUser(){
		$sql = "SELECT u.usuario,c.clave,per.perfiles,per.idperfil_mayor,u.bloqueado,u.intentos_fallidos,u.primer_inicio
				FROM tusuario u
				INNER JOIN tusuario_clave c ON c.idusuario_clave = u.idusuario_clave
				INNER JOIN tusuario_perfil per ON per.idusuario_perfil = u.idusuario_perfil
				WHERE u.estatus = 1 AND u.usuario = '$this->usuario'";
		$this->ejecutar($sql);
		}

		public function selectUserSolo(){
		$sql = "SELECT usuario FROM tusuario WHERE estatus = 1 AND usuario = '$this->usuario'";
		$this->ejecutar($sql);
		}
	}
/*===================================*/

?>