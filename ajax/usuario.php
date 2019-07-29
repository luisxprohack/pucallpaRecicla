<?php

  //llamar a la conexion de la base de datos

  require_once("../config/conexion.php");


  //llamar a el modelo Usuarios 

  require_once("../modelos/Usuarios.php");
  $usuarios = new Usuarios();

  //declaramos las variables de los valores que se envian por el formulario y que recibimos por ajax y decimos que si existe el parametro que estamos recibiendo

   $id_usuario = isset($_POST["id_usuario"]);
   $nombre=isset($_POST["nombre"]);
   $apellido=isset($_POST["apellido"]);
   $correo=isset($_POST["correo"]);
   $celular=isset($_POST["celular"]);
   $dni=isset($_POST["dni"]);
   $password=isset($_POST["password"]); 
   $distrito=isset($_POST["distrito"]);
   $direccion=isset($_POST["direccion"]);
   $referencia=isset($_POST["referencia"]);
   
   switch($_GET["op"]){

         case "guardaryeditar":

          $datos=$usuarios->get_dni_del_usuario($_POST["dni"]);

          if(empty($_POST["id_usuario"])){
            if(is_array($datos)==true and count($datos)==0){
              $usuarios -> registrar_usuario($nombre,$apellido,$email,$celular,$dni,$contraseña,$distrito,$direccion,$referencia);
              $message[]="registro correcto";
            }else{
              $errors[]="dni ya ah sido registrado";
            }
          }

          if(isset($messages)){
        
        ?>
        <div class="alert alert-success" role="alert">
            <button type="button" class="close" data-dismiss="alert">&times;</button>
            <strong>¡Bien hecho!</strong>
            <?php
              foreach($messages as $message) {
                  echo $message;
                }
              ?>
        </div>
        <?php
      }
   //fin success

      //mensaje error
         if(isset($errors)){
      
      ?>
        <div class="alert alert-danger" role="alert">
          <button type="button" class="close" data-dismiss="alert">&times;</button>
            <strong>Error!</strong> 
            <?php
              foreach($errors as $error) {
                  echo $error;
                }
              ?>
        </div>
      <?php

      }



        break;
       }




?>
