<?php

require('ControladorMascota.php');

if((isset($_REQUEST['usuario'])) || (isset($_REQUEST['nombre'])))
{
	$usuario = $_REQUEST['usuario'];
	$nombre= $_REQUEST['nombre'];
	$raza = $_REQUEST['raza'];
	$edad = $_REQUEST['edad'];
	$sexo = $_REQUEST['sexo'];
	$vacuna = $_REQUEST['vacuna'];
	$gusto = $_REQUEST['gusto'];
	$urlImg = $_REQUEST['urlImg'];


	$user = new Usuario();
	$user->setUsername($usuario);

	$mascota = new Mascota();
	$mascota->setNombre($nombre);
	$mascota->setRaza($raza);
	$mascota->setEdad($edad);
	$mascota->setSexo($sexo);
	$mascota->setVacuna($vacuna);
	$mascota->setGusto($gusto);
	$mascota->setUrlImg($urlImg);

	$OBJControladorMascota = new ControladorMascota();
	echo $OBJControladorMascota->insertarMascota($user,$mascota);
}

?>