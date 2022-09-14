<?php
include ("assets/conexion/servidor.php");



$idusuario = $_GET['id'];
$tallerista_seleccionado = $_GET['tallerista'];
 $taller_seleccionado = $_GET['taller'];
 $calendario_seleccionado = $_GET['calendario'];
 $turno_seleccionado = $_GET['turno'];
$dia_seleccionado = $_GET['dia'];
$codigo = $_REQUEST['Codigo'];
$nombre = $_REQUEST['Nombre'];
$carrera = $_REQUEST['Carrera'];

//$conexion = mysqli_connect($host, $db_username, $db_password,$db_name );
//$sql = "SELECT * FROM usuarios_talleres WHERE idUsuarios = '$idusuario';";

//$result = mysqli_query($conexion,$sql);

$update = ("UPDATE usuarios_talleres SET Codigo= $codigo, Nombre = $nombre, Carrera= $carrera WHERE  idUsuarios= $idusuario");

$result_update = mysqli_query($conexion,$update);

//while($taller = mysqli_fetch_array($result)){

    echo "<script type='text/javascript'>
    window.location='taller1.2.php?tallerista=$tallerista_seleccionado&taller=$taller_seleccionado&calendario=$calendario_seleccionado&turno=$turno_seleccionado&dia=$dia_seleccionado'
    </script>";

//echo "<script> window.history.back();</script>";

?>