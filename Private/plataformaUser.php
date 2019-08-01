<?php


session_start();
if(isset($_SESSION['usuarioValido']) && $_SESSION['usuarioValido']==true){

//$nombreCompleto=$_SESSION['Unombres']['nombres'];
//$apellidoCompleto=$_SESSION['Uapellidos']['apellidos']:
}else{
header("Location: http://localhost/pucallpaRecicla/private/login.php");
exit;
}

$now=time();

if($now>$_SESSION['expire']){
  session_destroy();
  header("Location: http://localhost/pucallpaRecicla/private/login.php");
}



require_once 'header.php';

?>

<div class="principalUser" style="background-image: url('images/registro.jpg');">
    <div class="boxUser">
        <div class="index">
            <a href="../index.html"><span class="spanU">
                            Pucallpa Recicla </span></a>
            <div class="user">
                <div class="infoU">
                   <h2 class="h2U">DATOS PERSONALES</h2>
                   <hr class="hrU"> 
                    <div class="datosU">
                        <p>Nombres:</p>
                        <p><?php echo $_SESSION['Unombres']; ?></p>
                    </div>
                    <div class="datosU">
                        <p>Apellidos:</p>
                        <p><?php echo  $_SESSION['Uapellidos']; ?></p>
                    </div>
                    <div class="datosU">
                        <p>Puntaje:</p>
                        <p><?php  echo $_SESSION['Upuntaje']?>         
                        </p>
                    </div>
                    <div class="datosU">
                        <p>Opciones:</p>
                        <button type="submit" class="btnU" href="#" data-toggle="modal" data-target="#logoutModal"> SALIR</button>
                        <button type="submit" class="btnUEdit"> Editar</button>
                    </div>
                    <div class="imgU">
                      <img src="imagen/logotipo.jpeg" width="80%">
                    </div>

                </div>
                <div class="rankingU">
                    <h2 class="h2U">RANKING DE USUARIOS</h2> 
                    <hr class="hrU">
                        <div class="tableMax">
                           <?php 

                        require_once 'config/conexion.php';
                        $sql="SELECT * FROM usuarios";
                        $resultado=$conexion->query($sql);

                        echo "<p>Número de Concursantes : ".$resultado->num_rows."</p>";

                                  echo "<table class='tableU'>";
                                  echo "<tr>";
                                    echo "<th>Nombre</th>";
                                    echo "<th>Apellidos</th>";
                                    echo "<th>Puntaje</th>";                                   
                                  echo "</tr>";
                                    while ($fila=$resultado->fetch_array(MYSQLI_ASSOC)){
                                    echo "<tr>";
                                    echo "<td>".$fila['nombres']."</td>";
                                    echo "<td>".$fila['apellidos']."</td>";
                                    echo "<td>".$fila['puntaje']."</td>";
                                    echo "</tr>";
                                    }
                                  echo "</table>"
                            ?>  
                        </div>
                    
                </div>
            </div>                
        </div>
    </div>

</div>

<div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Desea cerrar Sesión?</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">Seleccione "Cerra" para terminar la sesión.</div>
        <div class="modal-footer">
          <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancelar</button>
          <a class="btn btn-primary" href="cerrar.php">Cerrar</a>
        </div>
      </div>
    </div>
  </div>

<?php
require_once 'footer.php';
?>