<?php

  //conexion a la base de datos

   require_once("../config/conexion.php");


   class Usuarios extends Conectar {


         public function get_filas_usuario(){

            $conectar= parent::conexion();
           
             $sql="select * from usuarios";
             
             $sql=$conectar->prepare($sql);

             $sql->execute();

             $resultado= $sql->fetchAll(PDO::FETCH_ASSOC);

             return $sql->rowCount();
        dasdadasd
        }

        public function login(){

            $conectar=parent::conexion();
            parent::set_names();

            if(isset($_POST["enviar"])){

              //INICIO DE VALIDACIONES
              $password = $_POST["password"];

              $dni = $_POST["dni"];

              

                if(empty($correo) and empty($password)){

                  header("Location:".Conectar::ruta()."index.php?m=2");
                 exit();

                }

                 else if(!preg_match("/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[$@$!%*?&])([A-Za-z\d$@$!%*?&]|[^ ]){12,15}$/", $password)) {

              header("Location:".Conectar::ruta()."index.php?m=1");
              exit();

            }

             else {

                  $sql= "select * from usuarios where dni=? and password=?";

                  $sql=$conectar->prepare($sql);

                  $sql->bindValue(1, $correo);
                  $sql->bindValue(2, $password);
                  $sql->execute();
                  $resultado = $sql->fetch();

                          //si existe el registro entonces se conecta en session
                      if(is_array($resultado) and count($resultado)>0){

                         /*IMPORTANTE: la session guarda los valores de los campos de la tabla de la bd*/
                       $_SESSION["id_usuario"] = $resultado["id_usuario"];
                       $_SESSION["nombres"] = $resultado["nombres"];
                       $_SESSION["apellidos"] = $resultado["apellidos"];
                       $_SESSION["dni"] = $resultado["dni"];   

                        header("Location:".Conectar::ruta()."vistas/home.php");

                         exit();


                      } else {
                          
                          //si no existe el registro entonces le aparece un mensaje
                          header("Location:".Conectar::ruta()."index.php?m=1");
                          exit();
                       }                
                   }//cierre del else
            }//condicion enviar
        }

        public function registrar_usuario($nombre,$apellido,$email,$celular,$dni,$contraseña,$distrito,$direccion,$ref_direccion){

             $conectar=parent::conexion();
             parent::set_names();

             $sql="insert into usuarios 
             values(null,?,?,?,?,?,?,?,?,?";

             $sql=$conectar->prepare($sql);

             $sql->bindValue(1, $_POST["nombres"]);
             $sql->bindValue(2, $_POST["apellidos"]);
             $sql->bindValue(3, $_POST["email"]);
             $sql->bindValue(4, $_POST["celular"]);
             $sql->bindValue(5, $_POST["dni"]);
             $sql->bindValue(6, $_POST["contraseña"]);
             $sql->bindValue(7, $_POST["distrito"]);
             $sql->bindValue(8, $_POST["direccion"]);
             $sql->bindValue(9, $_POST["ref_direccion"]);
             $sql->execute();
             
              //obtenemos el valor del id del usuario
               $id_usuario = $conectar->lastInsertId();     

        }


  }
?>
