<?php

require('ControladorMascota.php');	

$OBJControladorMas= new ControladorMascota();
$Mas = $OBJControladorMas->consultarMAscotas();

if(count($Mas)>=1){
	echo json_encode($Mas);
}


?>