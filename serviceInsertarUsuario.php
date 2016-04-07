<?php
//Requerimos la clase de controlador usuario.
require ('ControladorUsuario.php');
/*require('Conexion.php');
$con = new Conexion();
$conexion=$con->conectar();*/
//Verificadmos si se realizo una petición mediante URL y tomamos los valores correspondientes.
//Capturamos los valores de la petición en variables y luego los asignamos a el objeto de tipo usuario.

if(  ( isset( $_REQUEST['nombre'] ) )  ||  (isset ($_REQUEST['apellido']) ) ||  (isset ($_REQUEST['email']) )  )
{
	$email = $_REQUEST['email'];
	$nombre = $_REQUEST['nombre'];
	$apellido = $_REQUEST['apellido'];
	$usuario = $_REQUEST['usuario'];
	$password = $_REQUEST['password'];
	$telefono = $_REQUEST['telefono'];
	$urlFoto = $_REQUEST['urlFoto'];
	$sexo = $_REQUEST['sexo'];

	$user = new Usuario();
	$user->setEmail(trim($email));
	$user->setNombre(trim($nombre));
	$user->setApellido(trim($apellido));
	$user->setUsername(trim($usuario));
	$user->setPassword(trim($password));
	$user->setTelefono(trim($telefono));
	$user->setSexo(trim($sexo));

	$fecha = getdate();
	$dia= $fecha['mday'];
	$mes=$fecha['mon'];
	$anio=$fecha['year'];
	$fechaNormalizada = $anio.'-'.$mes.'-'.$dia;	

	$user->setFechaReg($fechaNormalizada);

	$user->setUrlFoto($urlFoto);

	$OBJControladorUsu = new ControladorUsuario();
	$resultado = $OBJControladorUsu->insertarUsuario($user); 
	
}else{
	$resultado= FALSE;
}

echo $resultado;

?>