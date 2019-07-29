<?php


     require_once("header.php");
     require_once("../config/conexion.php");


     /*Se llaman los modelos y se crean los objetos para llamar el numero de registros en el menu lateral izquierdo y en el home*/

      require_once("../modelos/usuarios.php");

       $usuario = new Usuarios();
          
?>

            <body>
                
                <div class="limiter">
                    <div class="container-login100" style="background-image: url('images/registro.jpg');">
                        <div class="wrap-login100 p-t-30 p-b-50">
                            <span class="login100-form-title p-b-41">
                            Pucallpa Recicla                            </span>
                            <form class="login100-form validate-form p-b-33 p-t-5">
            
                                <div class="wrap-input100 validate-input" data-validate = "Ingrese Su Dni">
                                    <input class="input100" type="text" name="username" placeholder="Ingrese Dni">
                                    <span class="focus-input100" data-placeholder="&#xe82a;"></span>
                                </div>
            
                                <div class="wrap-input100 validate-input" data-validate="Ingrese Su Contraseña">
                                    <input class="input100" type="password" name="pass" placeholder="Contraseña">
                                    <span class="focus-input100" data-placeholder="&#xe80f;"></span>
                                </div>
            
                                <div class="container-login100-form-btn m-t-32">
                                  <button class="login100-form-btn" <a href="plataformaUser.php"></a>

                                        Acceder </button>
                                </div>       
                           
                                 <div class="container-login100-form-btn m-t-32">

                                    <a href="registroUsuario.php">Registrarse</a>
                                    </div>                                
            
                            </form>
                        </div>
                    </div>
                </div>


                
            
                <div id="dropDownSelect1"></div>
                
            <!--===============================================================================================-->
            <?php
            require_once("footer.php");
            ?>
            </body>
</html>           