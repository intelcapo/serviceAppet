<?php
/**
* Clase que se usará para la conexión de datos
*/
require('DataConection.php');
class Conexion
{
	private $datos_conx;
	private $servidor;
	private $usuario;
	private $pass;
	private $base;
	private $conexion;
	
	public function __construct()
	{
		//Se iniciados dn las propiedades con los datos almacenados en la clase DataConnection.
		$this->datos_conx = new DataConnection();
		$this->servidor=$this->datos_conx->SERVIDOR;
		$this->usuario=$this->datos_conx->USUARIO;
		$this->pass=$this->datos_conx->PASSWORD;
		$this->base=$this->datos_conx->BD;
	}


	public function Conectar(){
		//Nos conectamos con el servidor y verificamos si la conexión fue efectiva.

		/*
			Ojo:
			Para la versión de php 5 ben adelante se debe usar el método mysqli para que se permita comunicar con las bases de datos.
		*/		
		$conexion = new mysqli($this->servidor,$this->usuario,$this->pass,$this->base); 
		//Se valida que la conexión no posea ningún error.
		if($conexion->connect_error){
			die("Conexion fallida: ".$conexion->connect_error);
		}else{
			//echo "<b>Conexion establecida</b><br>";
		}
		return $conexion;	
	}

	//Función para desconectar la base de datos.
	public  function Desconectar($conexion){
		$conexion->close();
	}
	
}
	
?>
