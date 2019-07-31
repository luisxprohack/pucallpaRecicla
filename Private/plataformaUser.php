<?php


session_start();
if(isset($_SESSION['usuarioValido']) && $_SESSION['usuarioValido']==true){

//$nombreCompleto=$_SESSION['Unombres']['nombres'];
//$apellidoCompleto=$_SESSION['Uapellidos']['apellidos']:
}else{
header("Location: error.php");
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
                   <h2 class="h2U">Informacion Personal</h2>
                   <hr class="hrU"> 
                    <div class="datosU">
                        <?php echo $_SESSION['Unombres']; ?>
                    </div>
                    <div class="datosU">
                        <?php echo $_SESSION['Uapellidos']; ?>
                    </div>
                    <div class="datosU">
                        <?php echo $_SESSION['Upuntaje'];?>
                    </div>
                    <div class="datosU">
                        
                    </div>
                </div>
                <div class="rankingU">
                    <h2 class="h2U">Ranking de Usuarios</h2> 
                    <hr class="hrU"> 
                </div>
            </div>                
        </div>
    </div>

</div>