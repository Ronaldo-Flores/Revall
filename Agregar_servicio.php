<?php

$id_servicio=$_POST['id_servicio'];
$descripcion_servicio=$_POST['descripcion_servicio'];
$tipo_servicio=$_POST['tipo_servicio'];
$precio=$_POST['precio'];



try { 
    require_once('conexion.php');
    $sql="insert into servicio(id_servicio,descripcion_servicio,tipo_servicio,precio)".
            "values('$id_servicio','$descripcion_servicio','$tipo_servicio','$precio')";
   
    $result=$conn->query($sql);
    
} catch (Exception $ex) {
    $error = $ex->getMessage();
}
header("Location:ingresar_servicio.php");
?>



