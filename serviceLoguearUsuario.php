<?php
//Hacemos uso de la  clase controlador usuario.
require ('ControladorUsuario.php');

if((isset($_REQUEST['usuario'])) && (isset($_REQUEST['password']))){
	//Verificamos en la llamada del servicio que existan los dos parametros.
	$usuario =  $_REQUEST['usuario'];
	$password = $_REQUEST['password'];

	
	$user = new Usuario();
	$user->setUsername(trim($usuario));
	$user->setPassword(trim($password));

	$OBJControladorUsu = new ControladorUsuario();
	echo $OBJControladorUsu->loguearUsuario($user);
}

?>