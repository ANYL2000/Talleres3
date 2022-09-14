<?php

include 'assets/conexion/servidor.php';



$idusuario = $_GET['id'];
$tallerista_seleccionado = $_GET['tallerista'];
 $taller_seleccionado = $_GET['taller'];
 $calendario_seleccionado = $_GET['calendario'];
 $turno_seleccionado = $_GET['turno'];
$dia_seleccionado = $_GET['dia'];


mysqli_query($conexion, "DELETE FROM usuarios_talleres WHERE idUsuarios = $idusuario");

echo "<script type='text/javascript'>
window.location='taller1.2.php?tallerista=$tallerista_seleccionado&taller=$taller_seleccionado&calendario=$calendario_seleccionado&turno=$turno_seleccionado&dia=$dia_seleccionado'
</script>";

//echo "<script> window.history.back();</script>";


?>