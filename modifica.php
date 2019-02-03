<?php

$id= $_POST['id_reserva'];
$fecha= $_POST['fecha_reserva'];
$direccion= $_POST['direccion'];
$descripcion= $_POST['descripcion_reserva'];
$hora= $_POST['hora_reserva'];

try 
{
    require_once('conexion.php');
    $sql="UPDATE reserva SET fecha_reserva='$fecha',descripcion_reserva='$descripcion', hora_reserva='$hora',direccion='$direccion' where (id_reserva='$id')";
    $result=$conn->query($sql);
} 
catch (Exception $e) 
{
    $error = $e->getMessage();
}
header("Location:cedula_modificar.php");

?>

