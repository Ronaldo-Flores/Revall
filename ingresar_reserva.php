<?php
$fecha_reserva=$_GET['fecha_reserva'];
$direccion=$_GET['direccion'];
$descripcion=$_GET['descripcion_reserva'];
$hora=$_GET['hora_reserva'];
$servicio=$_GET['id_servicio'];
$cedula=$_GET['cedula_cliente'];

try{
    require_once ('conexion.php');
    echo "$servicio";
    $sql="insert into reserva(cedula_cliente,id_servicio,fecha_reserva, direccion, descripcion_reserva, hora_reserva)
            values('$cedula','$servicio',$fecha_reserva','$direccion','$descripcion','$hora')";  
    
    $result=$conn->query($sql);
   } 
catch (Exception $e) 
{
  $error = $e->getMessage();
}
//header("location:generar_reserva.php");
?>

