<?php  

require_once '../config/conexion.php';


$nombre=$_POST['name'];
$correo=$_POST['email'];
$tema=$_POST['subject'];
$mensaje=$_POST['message'];

$sql="INSERT INTO mensaje (nombres, email, tema, mensaje) VALUE ('$nombre','$correo','$tema','$mensaje')";

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
      $ruta="Location:../../contact.php?v=ok";
    break;  
  case 2:
    $ruta="Location:../../contact.php?v=2";
    break;
}

header($ruta);
?>