<?php
require('Usuario.php');
require('Conexion.php');
require('IUsuario.php');

class ControladorUsuario implements  IUsuario{
	//Propiedades para la manipulacion de datos en la base de datos.
	private $conexion;
	private $mysql;
	private $SQL;
	private $usuario;
	private $resultado;

	//Constructor de la clase.
	public function __construct() {
		$this->conexion = null;
		$this->mysql=null;
		$this->usuario=null;
	}
	//Función para insertar los datos en la tabla de usuarios
	public function insertarUsuario(Usuario $user){
		//Iniciamos una conexión de la base de datos.
		$this->mysql = new Conexion();
		$this->conexion = $this->mysql->conectar();
		
		$validaInsert = 0;

		$existeUsuario = $this->consultaExistencia($user);

		if($existeUsuario == 'TRUE'){
			$validaInsert = 2;
		}else{

			$SQLIN = 'INSERT INTO usuario (usuEmail,usuNombre,usuApellido,usuTelefono,usuUsername,usuPassword,usuSexo,usuUrlfoto,usuFechaReg) 
			VAlUES ("'.strtolower($user->getEmail()).'",
				"'.strtolower($user->getNombre()).'",
				"'.strtolower($user->getApellido()).'",
				"'.strtolower($user->getTelefono()).'",
				"'.strtolower($user->getUsername()).'",
				"'.strtolower($user->getPassword()).'",
				"'.strtolower($user->getSexo()).'",
				"'.strtolower($user->getUrlFoto()).'",
				"'.strtolower($user->getFechaReg()).'");';
			
			if($this->conexion->query($SQLIN)==TRUE){				
				$validaInsert = 1;
			}else{				
				$validaInsert = 0;
			}	
				
		}

		$this->mysql->Desconectar($this->conexion);

		return $validaInsert;
	}


	function consultaExistencia(Usuario $user){
		$this->mysql = new Conexion();
		$this->conexion=$this->mysql->conectar();

		$userExiste = 'FALSE';
		$SQL = 'SELECT * FROM usuario WHERE usuUsername ="'.strtolower($user->getUsername()).'"';

		$resultado = $this->conexion->query($SQL);

		if($resultado->num_rows>0){
			$userExiste = 'TRUE';
		}
		$this->mysql->Desconectar($this->conexion);
		return $userExiste;

	}

	public function loguearUsuario(Usuario $user){
		$this->mysql = new Conexion();
		$this->conexion=$this->mysql->conectar();

		$userLog = 'FALSE';
		$SQL = 'SELECT * FROM usuario WHERE usuUsername ="'.strtolower($user->getUsername()).'" 
				AND usuPassword="'.strtolower($user->getPassword()).'"';

		$resultado = $this->conexion->query($SQL);

		if($resultado->num_rows>0){
			$userLog = 'TRUE';
		}
		$this->mysql->Desconectar($this->conexion);
		return $userLog;	
	}

	public function consultarUsuarios(){

		$this->mysql= new Conexion();
		$this->conexion = $this->mysql->Conectar();

		$SQL = 'SELECT * FROM usuario WHERE usuEstado ="ACTIVO"';
		$arrayUsuarios = array();
		$resultado = $this->conexion->query($SQL);

		if($resultado->num_rows>0){
			while ($row = $resultado->fetch_object()) {
				$arrayUsuarios[]=$row;
			}
		}

		$this->mysql->Desconectar($this->conexion);
		return $arrayUsuarios;

	}
}

?>