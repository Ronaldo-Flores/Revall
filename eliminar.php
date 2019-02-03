<?php
$tipo_servicio=$_GET[tipo_servicio];
try
{
require_once('conexion.php');
$sql="delete from servicio where tipo_servicio='$tipo_servicio'";
$result=$conn->query($sql);
} catch (Exception $ex)
{
    $error=$ex->getMessage();
}
header("Location:borrar.php");
