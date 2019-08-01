<?php
session_start();
session_destroy(); // elimina la sesion iniciar
//redireccionamos al login.
header("location: http://localhost/pucallpaRecicla/index.html");
?>