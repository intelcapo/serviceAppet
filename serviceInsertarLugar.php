<?php

require('ControladorLugar.php');

if((isset($_REQUEST['nombre'])) && (isset($_REQUEST['lugId']))){
	$id = $_REQUEST['lugId'];
	$nombre = $_REQUEST['nombre'];
	$nit = $_REQUEST['nit'];
	$direccion = $_REQUEST['direccion'];
	$telefono = $_REQUEST['telefono'];
	$latitud = $_REQUEST['latitud'];
	$longitud = $_REQUEST['longitud'];
	$clasificacion = $_REQUEST['clasificacion'];

	$Lugar = new Lugar();
	$Lugar->setId($id);
	$Lugar->setNombre($nombre);
	$Lugar->setNit($nit);
	$Lugar->setDireccion($direccion);
	$Lugar->setTelefono($telefono);
	$Lugar->setLatitud($latitud);
	$Lugar->setLongitud($longitud);
	$Lugar->setClasificacion($clasificacion);

	$OBJControladorLugar = new ControladorLugar();
	echo $OBJControladorLugar->insertarLugar($Lugar);


}

?>