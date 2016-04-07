<?php

require('ControladorUsuario.php');

$OBJControladorUsuario = new ControladorUsuario();
$Usuarios = $OBJControladorUsuario->consultarUsuarios();

if(count($Usuarios)>=1){
	echo json_encode($Usuarios);
}
?>