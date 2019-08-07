<?php
ob_start();
session_start();
require_once 'header.php';
require_once 'config/conexion.php';

if(isset($_GET['id'])){
  //algo que buscar
  $codigo = $_GET['id'];

  $sql="SELECT * FROM usuarios WHERE id_usuarios=".$codigo;
  $resultado1 = $conexion->query($sql);

  $cola = $resultado1->fetch_array(MYSQLI_ASSOC);

  $nombres1 = $cola['nombres'];
  $apellidos1 = $cola['apellidos'];
  $puntaje1 =$cola['puntaje'];
  }

if(isset($_SESSION['usuarioValido']) && $_SESSION['usuarioValido']==true){

}else{
header("Location: login.php");
exit;
}

$now=time();

if($now>$_SESSION['expire']){
  session_destroy();
  header("Location: login.php");
}

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
                   <form class="formU" method="post" action="modelos/editU.php">
                    <div class="datosU">
                        <p>Nombres:</p>
                        <p><?php echo $nombres1; ?></p>
                    </div>
                    <div class="datosU">
                        <p>Apellidos:</p>
                        <p><?php echo $apellidos1; ?></p>
                        <input type="hidden" name="codigo" value="<?php echo $codigo; ?>" />
                    </div>
                    <div class="datosU">
                        <p>Puntaje:</p>
                        <input type="text" name="puntaje" class="inputUe" value="<?php echo $puntaje1; ?>">
                    </div>
                    <div class="datosU">
                        <p>Opciones:</p>
						<button type="edit" class="btnUEdit" href="#"> Editar</button>
                        </form>                     
                    </div>
                    <div class="datosU">
                        <p>Opciones:</p>
                        <button type="submit" class="btnU" href="#" data-toggle="modal" data-target="#logoutModal"> SALIR</button>                   
                    </div>
                    <div class="imgU">
                      <img class="imgK" src="imagen/logotipo.jpeg" >
                    </div>

                </div>
                <div class="rankingU">
                    <h2 class="h2U">RANKING</h2> 
                    <hr class="hrU">
                        <div class="tableMax">
                            <?php 

                             
                              $sql="SELECT * FROM usuarios ORDER BY puntaje DESC";
                              $resultado=$conexion->query($sql);

                              //echo "<p>Número de Concursantes : ".$resultado->num_rows."</p>";

                                        echo "<table class='tableU'>";
                                        echo "<tr>";
                                          echo "<th>Nombre</th>";
                                          echo "<th>Apellidos</th>";
                                          echo "<th>Puntaje</th>";  
                                          echo "<th>Editar</th>";                                 
                                        echo "</tr>";
                                          while ($fila=$resultado->fetch_array(MYSQLI_ASSOC)){
                                          echo "<tr>";
                                          echo "<td>".$fila['nombres']."</td>";
                                          echo "<td>".$fila['apellidos']."</td>";
                                          echo "<td>".$fila['puntaje']."</td>";
                                          echo "<td><a href='plataformaAdmin.php?id=".$fila['id_usuarios']."'><img src='imagen/editar.png' width='20px'></td>";
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