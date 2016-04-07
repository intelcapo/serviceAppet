<?php

class Usuario{

	private $id;
	private $email;
	private $nombre;
	private $apellido;
	private $telefono;
	private $username;
	private $password;
	private $edad;
	private $estado;
	private $fechaReg;
	private $fechaMod;
	private $urlFoto;
	private $sexo;

	public function __construct(){
		$this->id="";
		$this->email="";
		$this->nombre="";
		$this->apellido="";
		$this->telefono="";
		$this->username="";
		$this->password="";
		$this->edad="";
		$this->estado="";
		$this->fechaReg="";
		$this->fechaMod="";
		$this->urlFoto="";
		$this->sexo="";
	}

	public function getId(){
		return $this->id;
	}
	public function getEmail(){
		return $this->email;
	}

	public function getNombre(){
		return $this->nombre;
	}

	public function getApellido(){
		return $this->apellido;
	}

	public function getTelefono(){
		return $this->telefono;
	}

	public function getUsername(){
		return $this->username;
	}

	public function getPassword(){
		return $this->password;
	}

	public function getEdad(){
		return $this->edad;
	}

	public function getEstado(){
		return $this->estado;
	}

	public function getFechaReg(){
		return $this->fechaReg;
	}

	public function getFechaMod(){
		return $this->fechaMod;
	}

	public function getUrlFoto(){
		return $this->urlFoto;
	}

	public function getSexo(){
		return $this->sexo;
	}

	public function setId($id){
		$this->id = $id;
	}

	public function setEmail($email){
		$this->email = $email;
	}

	public function setNombre($nombre){
		$this->nombre = $nombre;
	}

	public function setApellido($apellido){
		$this->apellido = $apellido;
	}

	public function setTelefono($telefono){
		$this->telefono = $telefono;
	}

	public function setUsername($username){
		$this->username = $username;
	}

	public function setPassword($password){
		$this->password = $password;
	}

	public function setEdad($edad){
		$this->edad = $edad;
	}

	public function setEstado($estado){
		$this->estado = $estado;
	}

	public function setFechaReg($fechaReg){
		$this->fechaReg = $fechaReg;
	}

	public function setFechaMod($fechaMod){
		$this->fechaMod = $fechaMod;
	}

	public function setUrlFoto($urlFoto){
		$this->urlFoto = $urlFoto;
	}

	public function setSexo($sexo){
		$this->sexo = $sexo;
	}

}

?>