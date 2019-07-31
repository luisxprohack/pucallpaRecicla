<?php
include_once 'header.php';
?>
            <body>
                
                <div class="limiter">
                  
                    <div class="container-login100" style="background-image: url('images/registro.jpg');">

                        <div class="wrap-login100 p-t-30 p-b-50">
                            <a href="../index.html"><span class="login100-form-title p-b-41">
                            Pucallpa Recicla </span></a>
  
                            <form class="login100-form validate-form p-b-33 p-t-5" method="post" action="modelos/RegUsuarios.php">
 

            
                                <div class="wrap-input100 validate-input" data-validate = "Ingrese Su Nombre">
                                    <input class="input100" type="text" name="nombres" id="nombres" placeholder="Nombres">
                                    <span class="focus-input100" data-placeholder="&#xe82a;"></span>
                                </div>

                                <div class="wrap-input100 validate-input" data-validate = "Ingrese Su Apellido">
                                    <input class="input100" type="text" name="apellidos" id="apellidos" placeholder="Apellidos">
                                    <span class="focus-input100" data-placeholder="&#xe82a;"></span>
                                </div>

                                <div class="wrap-input100 validate-input" data-validate = "E-Mail">
                                    <input class="input100" type="text" name="correo" id="correo" placeholder="E-mail">
                                    <span class="focus-input100" data-placeholder="&#59157;"></span>
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
                                    <button class="login100-form-btn">
                                        Registrarse</button>
                                </div>
                                <div class="container-login100-form-btn m-t-32">
                                 
                                        <a href="login.php"> Iniciar Sesión </a>
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
                <script src="vendor/jquery/jquery-3.2.1.min.js"></script>
            <!--===============================================================================================-->
                <script src="vendor/animsition/js/animsition.min.js"></script>
            <!--===============================================================================================-->
                <script src="vendor/bootstrap/js/popper.js"></script>
                <script src="vendor/bootstrap/js/bootstrap.min.js"></script>
            <!--===============================================================================================-->
                <script src="vendor/select2/select2.min.js"></script>
            <!--===============================================================================================-->
                <script src="vendor/daterangepicker/moment.min.js"></script>
                <script src="vendor/daterangepicker/daterangepicker.js"></script>
            <!--===============================================================================================-->
                <script src="vendor/countdowntime/countdowntime.js"></script>
            <!--===============================================================================================-->
                <!--<script src="js/main.js"></script>-->
            
            </body>
</html>