<?php

ob_start();
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
$puntaje=000;

$sql="INSERT INTO usuarios (nombres,apellidos,email,celular,dni,password,distrito,direccion,referencia,puntaje) VALUE ('$nombres','$apellidos','$correo','$celular','$dni','$password','$distrito','$direccion','$referencia','$puntaje')";


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
      $ruta="Location:../login.php?v=ok";
    break;  
  case 2:
    $ruta="Location:../login.php?v=2";
    break;
}

header($ruta);
             
?>
