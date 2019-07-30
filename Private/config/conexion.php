<?php

$servidor="localhost";
$usuario="root";
$clave="";
$baseDatos="pucrecicla";

$conexion=new mysqli($servidor,$usuario,$clave,$baseDatos);
//Tipo de error de conexión
if($conexion-> connect_error){

die('Error de Conexión ('.$conexion->connect_errno.')'
			.$conexion->connect_error);	
}  	
?>