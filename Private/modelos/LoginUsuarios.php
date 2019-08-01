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
				$_SESSION['usuarioValido']=true;
				$_SESSION['Unombres']=$fila['nombres'];
				$_SESSION['Uapellidos']=$fila['apellidos'];
				$_SESSION['Upuntaje']=$fila['puntaje'];
				$_SESSION['start']=time();
				$_SESSION['expire']=$_SESSION['start']+(5*60);
				 //guardar todo el registro correcto
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


$ruta="";

switch ($bandera) {
	case 1://todo correcto
		$ruta="Location: http://localhost/pucallpaRecicla/Private/plataformaUser.php";
		break;
	
	case 2://error en la clave
		$ruta="Location: http://localhost/pucallpaRecicla/Private/login.php?v=2";
		break;

	case 3://error en el usuario
		$ruta="Location: http://localhost/pucallpaRecicla/Private/login.php?v=3";
		break;
}

header($ruta);


?>