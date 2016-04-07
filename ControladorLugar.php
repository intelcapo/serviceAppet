<?php

require('Conexion.php');
require('ILugar.php');
require('Lugar.php');
class ControladorLugar implements ILugar
{
	private $conexion;
	private $con;

	function __construct()
	{
	
	}

	public function insertarLugar(Lugar $lug){

		$this->con = new Conexion();
		$this->conexion = $this->con->Conectar();
		$regLugar=0;
		if($this->consultarLugarExistente($lug)=='TRUE'){
			$regLugar=2;
		}else{
			$SQL = 'INSERT INTO lugar (lugId,lugNombre,lugNit,lugDireccion,lugTelefono,lugLatitud,lugLongitud,lugClasificacion) 
				VALUES("'.strtolower($lug->getId()).'",
				"'.strtolower($lug->getNombre()).'",
				"'.strtolower($lug->getNit()).'",
				"'.strtolower($lug->getDireccion()).'",
				"'.strtolower($lug->getTelefono()).'",
				"'.strtolower($lug->getLatitud()).'",
				"'.strtolower($lug->getLongitud()).'",
				"'.strtolower($lug->getClasificacion()).'")';
		
			if($this->conexion->query($SQL) == TRUE){
				$regLugar = 1;
			}else{
				$regLugar = 0;
			}
		}
		return $regLugar;	

	}

	function consultarLugarExistente(Lugar $lugar){

		$this->con = new Conexion();
		$this->conexion = $this->con->Conectar();

		$SQL = 'SELECT * FROM lugar WHERE lugId ="'.strtolower($lugar->getId()).'" AND lugDireccion ="'.strtolower($lugar->getDireccion()).'"';

		$lugarExiste = 'FALSE';

		$resultado = $this->conexion->query($SQL);
		
		if($resultado->num_rows>0){
			$lugarExiste = 'TRUE';
		}else{
			$lugarExiste = 'FALSE';
		}

		return $lugarExiste;
	}

	public function consultarLugares(){
		$this->mysql= new Conexion();
		$this->conexion = $this->mysql->Conectar();

		$SQL = 'SELECT * FROM lugar WHERE lugEstado ="ACTIVO"';
		$arrayLugares = array();
		$resultado = $this->conexion->query($SQL);

		if($resultado->num_rows>0){
			while ($row = $resultado->fetch_object()) {
				$arrayLugares[]=$row;
			}
		}

		$this->mysql->Desconectar($this->conexion);
		return $arrayLugares;
	}

}
?>