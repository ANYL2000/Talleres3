<?php
require_once 'assets/conexion/servidor.php';
$conexion = connect($host, $port, $db_name, $db_username, $db_password);

$tallerista_seleccionado = $_GET["tallerista"];
$taller_seleccionado = $_GET["taller"];
$calendario_seleccionado = $_GET['calendario'];
$turno_seleccionado = $_GET['turno'];
$dia_seleccionado = $_GET['dia'];

$con=mysqli_connect($host,$db_username,$db_password,$db_name);



//$query =$conexion->prepare("SELECT FechaInicial, FechaFinal FROM calendario;");


//$query->execute();
//$resultado =$query->fetchAll();

?>
<!DOCTYPE html>
<html lang="en">
<head>

<header>
    <title>Talleres</title>
</header>

<div class="titulo_pagina"><h1 class="titulo">TALLERES</h1></div>
<link rel="stylesheet" href="assets/css/estilo_alumno1.1.css">
<!--<link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">-->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
    


<div class="fondo">

<h1 class="titulo_taller">Taller seleccionado</h1>
<div class="taller_informacion">
<p id="subtitulo">  TALLERISTA: <p class="subtitulo_informacion"><?php echo "$tallerista_seleccionado"?></p> </p>
<p id="subtitulo">  TALLER: <p class="subtitulo_informacion"><?php echo "$taller_seleccionado"?></p> </p>
<p id="subtitulo">  CALENDARIO: <p class="subtitulo_informacion"> <?php echo "$calendario_seleccionado"?></p></p>
<p id="subtitulo">  TURNO: <p class="subtitulo_informacion"> <?php echo "$turno_seleccionado "?></p></p>
<p id="subtitulo">  DIA: <p class="subtitulo_informacion"> <?php echo " $dia_seleccionado" ?></p></p>
</div>


<script>
function validar(frm) {
  frm.consultar.disabled = true;
  //for (i=0; i<3; i++)
    if (frm['codigo'].value ==''  ) return
  frm.consultar.disabled = false;
}
</script>

<form action="" method="POST" id="Codigo_formulario">
  <ul>
            <li>  
                    <label for="name" >Codigo
                    <input class="entrada_texto" id="codigo" type="text" name="codigo" autocomplete="off" onkeyup = "validar(this.form)" autofocus required ></label>
                   
                    <button type="submit" class="btn btn-primary" id="consultar" name ="consultar" data-toggle="modal" data-target="#exampleModal" disabled><img src="assets/img/consulta.png" alt="assets/img/consulta.png" >Consultar</button>
                    
                    </li>
   
                    </ul>
                    </form>
                   


</div>
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script src="assets/js/sweetalert.js"></script>

<!--Seccion del modal de la informacion de la persona-->

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Información del estudiante</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="" method="POST">

         
     

  


<!--<script type="text/javascript" src="assets/js/bootstrap.bundle.min.js"></script>-->
<?php

if(isset($_POST['consultar'])){
 

  
$codigo = $_POST['codigo'];

$consultar_novalido = "SELECT * FROM personas WHERE codigo= '$codigo'";



$filas = mysqli_query($con,$consultar_novalido);



if(mysqli_num_rows($filas)==0){

  echo '<script>alertaeNoti("No estás en el sistema")</script>';

}

}
?>

<?php

$cod = $_POST['codigo'];
$query =$conexion->prepare("SELECT * FROM personas WHERE codigo= '$cod';");


$query->execute();
$resultado =$query->fetchAll();
  foreach($resultado as $informacion_persona):

  ///while($informacion_persona = mysqli_fetch_array($filas)){

    ?>

          <div class="form-group">
            <label for="recipient-name" class="col-form-label">Codigo:</label>
            <input type="text" class="form-control" id="recipient-codigo" value="<?php echo $informacion_persona["codigo"] ?>" disabled>
          </div>
          <div class="form-group">
            <label for="recipient-name" class="col-form-label">Nombre Completo:</label>
            <input type="text" class="form-control" id="recipient-nombre" value="<?php echo $informacion_persona["nombre"] ?>" disabled>
          </div>
          <div class="form-group">
            <label for="recipient-name" class="col-form-label">Carrera:</label>
            <input type="text" class="form-control" id="recipient-carrera" value="<?php echo $informacion_persona["carrera"] ?>" disabled>
          </div>
        
        


<?php
 

  endforeach;
 


//echo "registrado";

/*$conexion->query("INSERT INTO usuarios_talleres (Codigo,Nombre,Carrera,Ingreso,NombreTaller,Turno,Dia) values ('$codigo','$nombre',$carrera,'$calendario','$nombretaller','$turno',$dia)");
    

foreach($resultado as $ciclo): 

  endforeach ;

if($conexion){
 
//echo 'Registrado con exito';
echo '<script>alertaNoti("Se ha registrado el taller con exito")</script>';
 
}
*/


$filas=0;
//sleep(2);
//echo "<script> location.href=\"taller1.php\" </script>"; 



?>

<div class="modal-footer">
        <button type="submit" class="btn btn-secondary"  data-dismiss="modal">Cerrar</button>
        <button type="submit" class="btn btn-primary" id="inscribir" name="inscribir">Inscribirse</button>
      </div>
        </form>
      </div>
      </div>
  </div>
</div>

<?php
if(isset($_POST['inscribir'])){



  echo '<script>alertaNoti("Se ha registrado el taller con exito")</script>';

}

?>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<!--<script src="assets/js/onKeyup.js"></script>-->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

</body>
</html>
<?php $con->close(); $conexion=null; ?>