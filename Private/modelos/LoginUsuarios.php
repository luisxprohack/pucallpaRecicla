<?php
//verificacion del ADMIN a la DB

require_once '../config/conexion.php';


$dni=$_POST['dni'];
$password=$_POST['password'];
$bandera=0;

//echo "valores: ".$usuario." ".$clave;

//Tecnica para validacion de pocos usuarios

$sql="SELECT *FROM usuarios";

$resultado=$conexion->query($sql);
//bucle de busqueda de usuarios en la tabla
while ($fila=$resultado->fetch_array(MYSQLI_ASSOC)){
//validadcion de user y password
	if($fila['dni']==$dni){
		
			if($fila['password']==$password){
				echo 'User and password correct';
				$bandera=1;
				//iniciar sesion valida
				
				session_start();
				$_SESSION['usuarioValido']=$fila; //guardar todo el registro correcto
				break;

			}else{
				echo 'Error password';
				$bandera=2;
				break;
			}
	}else{
		
		$bandera=3;
		//break;
	}
	
}