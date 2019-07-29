
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
                           Registrarse                           </span>
                            <form class="login100-form validate-form p-b-33 p-t-5" method="post" id="usuario_form">
            
                                <div class="wrap-input100 validate-input" data-validate = "Ingrese Su Nombre">
                                    <input class="input100" type="text" name="nombre" id="nombre" placeholder="Nombres">
                                    <span class="focus-input100" data-placeholder="&#xe82a;"></span>
                                </div>

                                <div class="wrap-input100 validate-input" data-validate = "Ingrese Su Apellido">
                                    <input class="input100" type="text" name="apellido" id="apellido" placeholder="Apellido">
                                    <span class="focus-input100" data-placeholder="&#xe82a;"></span>
                                </div>

                                <div class="wrap-input100 validate-input" data-validate = "E-Mail">
                                    <input class="input100" type="text" name="correo" id="correo" placeholder="E-mail">
                                    <span class="focus-input100" data-placeholder="&#xe82a;"></span>
                                </div>
            
                                <div class="wrap-input100 validate-input" data-validate="Ingrese Su Celular">
                                    <input class="input100" type="text" name="celular" id="celular" placeholder="Celular">
                                    <span class="focus-input100" data-placeholder="&#xe80f;"></span>
                                </div>

                                <div class="wrap-input100 validate-input" data-validate = "Ingrese Su Dni">
                                    <input class="input100" type="text" name="dni" id="dni" placeholder="Dni">
                                    <span class="focus-input100" data-placeholder="&#xe82a;"></span>
                                </div>

                                 <div class="wrap-input100 validate-input" data-validate="Ingrese Su Contraseña">
                                    <input class="input100" type="password" name="password" id="password" placeholder="Contraseña">
                                    <span class="focus-input100" data-placeholder="&#xe80f;"></span>
                                </div>

                                <div class="wrap-input100 validate-input" data-validate = "Ingrese Su Distrito">
                                    <input class="input100" type="text" name="distrito" id="distrito" placeholder="Distrito">
                                    <span class="focus-input100" data-placeholder="&#xe82a;"></span>
                                </div>

                                <div class="wrap-input100 validate-input" data-validate = "Ingrese Su Direccion">
                                    <input class="input100" type="text" name="direccion" id="direccion" placeholder="Direccion">
                                    <span class="focus-input100" data-placeholder="&#xe82a;"></span>
                                </div>

                                <div class="wrap-input100 validate-input" data-validate = "Ingrese una Referencia">
                                    <input class="input100" type="text" name="referencia" id="referencia" placeholder="Referencia">
                                    <span class="focus-input100" data-placeholder="&#xe82a;"></span>
                                </div>
            

                                <div class="container-login100-form-btn m-t-32">
                                    <button type="submit" name="action" id="btnGuardar" value="add" class="login100-form-btn">
                                      Registrarse
                                    </button>
                                </div>
                                <div>
                                  <input type="hiden" name="id_usuario" id="id_usuario"/>
                                </div>
                                <!--<div class="container-login100-form-btn m-t-32">

                                    <a href="registroUsuario.php">Registrarse</a>
                                    </div>-->                                
            
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