<?php

require_once '../config/conexion.php';

$codigo=$_POST['codigo'];
$puntaje=$_POST['puntaje'];



$sql="UPDATE usuarios SET puntaje='$puntaje' WHERE id_usuarios=$codigo;";

$resultado=$conexion->query($sql);

	if($resultado){
		$ruta="Location: ../plataformaAdmin.php?id=$codigo&v=1";
	}else {
		$ruta="Location: ../plataformaAdmin.php?id=$codigo&v=2";
	}

	header($ruta);

?>	