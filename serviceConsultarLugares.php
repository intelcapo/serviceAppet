<?php

require('ControladorLugar.php');

$OBJControladorLugar= new ControladorLugar();
$Lugares = $OBJControladorLugar->consultarLugares();

if(count($Lugares)>=1){
	echo json_encode($Lugares);
}

?>