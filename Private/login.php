<?php
ob_start();
require_once 'header.php';

?>
                <div class="limiter">
                
                    <div class="container-login100" style="background-image: url('images/registro.jpg');">
                        <div class="wrap-login100 p-t-30 p-b-50">
                            <!--<button><a href="../index.html" class="left-btn">
                                 <span class="icon-house">Inicio</span>
                                    </a>
                            </button>-->
                            <a href="../index.html"><span class="login100-form-title p-b-41">
                            Pucallpa Recicla                            </span></a>
                            <form class="login100-form validate-form p-b-33 p-t-5" action="modelos/LoginUsuarios.php" method="post">
            
                                <div class="wrap-input100 validate-input" data-validate = "Ingrese Su Dni">
                                    <input class="input100" type="text" name="dni" placeholder="Ingrese Dni">
                                   <!-- <span class="focus-input100" data-placeholder="&#xe82a;"></span>-->
                                </div>
            
                                <div class="wrap-input100 validate-input" data-validate="Ingrese Su Contraseña">
                                    <input class="input100" type="password" name="password" placeholder="Contraseña">
                                   <!-- <span class="focus-input100" data-placeholder="&#xe80f;"></span>-->
                                </div>
            
                                <div class="container-login100-form-btn m-t-32">
                                   <button class="login100-form-btn">
                                        Acceder </button>
                                        <a href="plataformaUser.php"></a></button>
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
                <script src="js/main.js"></script>
            
            </body>
</html>           