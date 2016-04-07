<?php

Class Lugar{

	private $idInt;
	private $id;
	private $nombre;
	private $nit;
	private $direccion;
	private $telefono;
	private $latitud;
	private $longitud;
	private $clasificacion;

	function __construct(){
		$this->idInt="";
		$this->id="";
		$this->nombre="";
		$this->nit="";
		$this->telefono="";
		$this->direccion="";
		$this->latitud="";
		$this->longitud="";
		$this->clasificacion="";
	}

	public function setIdInt($idInt){
		$this->idInt = $idInt;
	}

	public function setId($id){
		$this->id = $id;
	}

	public function setNombre($nombre){
		$this->nombre = $nombre;
	}

	public function setNit($nit){
		$this->nit = $nit;
	}

	public function setDireccion($direccion){
		$this->direccion = $direccion;
	}

	public function setTelefono($telefono){
		$this->telefono = $telefono;
	}

	public function setLatitud($latitud){
		$this->latitud = $latitud;
	}

	public function setLongitud($longitud){
		$this->longitud = $longitud;
	}

	public function setClasificacion($clasificacion){
		$this->clasificacion = $clasificacion;
	}


	public function getIdInt(){
		return $this->idInt;
	}

	public function getId(){
		return $this->id;
	}

	public function getNombre(){
		return $this->nombre ;
	}

	public function getNit(){
		return $this->nit;
	}

	public function getDireccion(){
		return $this->direccion;
	}

	public function getTelefono(){
		return $this->telefono;
	}

	public function getLatitud(){
		return $this->latitud ;
	}

	public function getLongitud(){
		return $this->longitud ;
	}
	public function getClasificacion(){
		return $this->clasificacion ;
	}



}

?>