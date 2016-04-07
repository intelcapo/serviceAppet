<?php
class Mascota{

	private $id;
	private $nombre;
	private $raza;
	private $edad;
	private $vacuna;
	private $sexo;
	private $gusto;
	private $urlImg;

	public function __construct(){
		$this->nombre="";
		$this->raza="";
		$this->edad="";
		$this->vacuna="";
		$this->sexo="";
		$this->gusto="";
		$this->urlImg="";
	}
	
	public function setId($id){
		 $this->id = $id;
	}

	public function setNombre($nombre){
		$this->nombre = $nombre;
	}

	public function setRaza($raza){
		$this->raza = $raza;
	}

	public function setEdad($edad){
		$this->edad = $edad;
	}

	public function setVacuna($vacuna){
		$this->vacuna = $vacuna;
	}

	public function setSexo($sexo){
		$this->sexo = $sexo;
	}

	public function setGusto($gusto){
		$this->gusto = $gusto;
	}

	public function setUrlImg($urlImg){
		$this->urlImg = $urlImg;
	}

	public function getId(){
		return $this->id;
	}

	public function getNombre(){
		return $this->nombre;
	}

	public function getRaza(){
		return $this->raza;
	}

	public function getEdad(){
		return $this->edad;
	}

	public function getVacuna(){
		return $this->vacuna;
	}

	public function getSexo(){
		return $this->sexo;
	}

	public function getGusto(){
		return $this->gusto;
	}

	public function getUrlImg(){
		return $this->urlImg;
	}


}
?>