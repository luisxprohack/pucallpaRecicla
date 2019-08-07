<?php
ob_start();
session_start();
session_destroy(); // elimina la sesion iniciar
//redireccionamos al login.
header("location: ../index.html");
?>