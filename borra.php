<?php
$id=$_GET['cedula'];
try {
   require_once 'conexion.php';
$sql="delete from reserva where cedula_cliente='$id'";
$resul=$conn->query($sql);

} catch (Exception $e) {
    $error=$e->getMessage();
}
echo "$sql";
//header ("location:cedula_cancelar.php");



