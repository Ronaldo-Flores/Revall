<?php
$id=$_GET['id'];
try {
   require_once 'conexion.php';
$sql="delete from reserva where id_reserva=$id";
$resul=$conn->query($sql);

} catch (Exception $e) {
    $error=$e->getMessage();
}
header ("location:cedula_cancelar.php");



