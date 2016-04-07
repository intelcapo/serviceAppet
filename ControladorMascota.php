<?php
require('Conexion.php');
require('IMascota.php');
require('Usuario.php');
require('Mascota.php');

/*
* Vlase de tipo controlador que nos permitirá crear mascotas en la base de datos.
*/
class ControladorMascota implements IMascota
{
	private $conexion;
	private $con;


	public function __construct()
	{
		$this->resultado=null;
	}

	public function insertarMascota(Usuario $user,Mascota $mas){
		$this->con = new Conexion();
		$this->conexion = $this->con->conectar();
		$regMascota = 0;	

		if($this->validaExistenciaMas($user,$mas) == 'TRUE'){
			$regMascota = 2;
		}else{
			$SQLMAS = 'INSERT INTO mascota (usuUsername,mNombre,mRaza,mEdad,mVacuna,mSexo,mGusto,mUrlFoto) VALUES("'.strtolower($user->getUserName()).'","'.strtolower($mas->getNombre()).'","'.strtolower($mas->getRaza()).'",
		 	'.$mas->getEdad().',"'.strtolower($mas->getVacuna()).'","'.strtolower($mas->getSexo()).'","'.strtolower($mas->getGusto()).'","'.strtolower($mas->getUrlimg()).'");';	
					
			if($this->conexion->query($SQLMAS)==TRUE){				
				$regMascota = 1;
			}else{				
				$regMascota = 0;
			}			
		}
		$this->con->Desconectar($this->conexion);
		return $regMascota;
		
	}

	function validaExistenciaMas(Usuario $user,Mascota $mas){
		$this->con = new Conexion();
		$this->conexion = $this->con->conectar();

		$SQL = 'SELECT * FROM Mascota WHERE usuUsername = "'.strtolower($user->getUserName()).
		'" AND mNombre="'.strtolower($mas->getNombre()).
		'" AND mRaza="'.strtolower($mas->getRaza()).'"';

		$resultado = $this->conexion->query($SQL);
		$mascotaExiste = 'FALSE';

		if($resultado->num_rows>0){
			$mascotaExiste = 'TRUE';
		}

		return $mascotaExiste;		
	}

	public function consultarMascotas(){

		$this->mysql= new Conexion();
		$this->conexion = $this->mysql->Conectar();

		$SQL = 'SELECT * FROM mascota WHERE mSexo = "m"';
		$arrayMas = array();
		$resultado = $this->conexion->query($SQL);

		if($resultado->num_rows>0){
			while ($row = $resultado->fetch_object()) {
				$arrayMas[]=$row;
			}
		}

		$this->mysql->Desconectar($this->conexion);
		return $arrayMas;
	}
}
?>