<?php


require_once '../config/conexion.php';



$nombres=$_POST['nombres'];
$apellidos=$_POST['apellidos'];
$correo=$_POST['correo'];
$celular=$_POST['celular'];
$dni=$_POST['dni'];
$password=$_POST['password'];
$distrito=$_POST['distrito'];
$direccion=$_POST['direccion'];
$referencia=$_POST['referencia'];

$sql="INSERT INTO usuarios (nombres,apellidos,email,celular,dni,password,distrito,direccion,referencia) VALUE ('$nombres','$apellidos','$correo','$celular','$dni','$password','$distrito','$direccion','$referencia')";


$resultado=$conexion->query($sql);
echo "$sql";
  if($resultado){
    echo 'registro correcto';
    $help=1;
  }else {
    echo 'registo incorrecto';
    $help=2;
  }
               
$ruta="";


switch ($help) {
  case 1:
      $ruta="Location:http://localhost/pucallpaRecicla/Private/login.php?v=1";
    break;
  
  case 2:
    $ruta="Location:http://localhost/pucallpaRecicla/Private/login.php?v=1";
    break;
}

              
?>
