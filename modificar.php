
<?php

$id_servicio=$_GET['id_servicio'];
$descripcion_servicio=$_GET['descripcion_servicio'];
$tipo_servicio=$_GET['tipo_servicio'];
$precio=$_GET['precio'];



try { 
    require_once('conexion.php');
    $sql="update servicio set descripcion_servicio='$descripcion_servicio',tipo_servicio='$tipo_servicio',precio='$precio' where tipo_servicio='$tipo_servicio'";
    //echo $sql;
    //exit();
    $result=$conn->query($sql);
    
} catch (Exception $ex) {
    $error = $ex->getMessage();
}
header("Location:modificarservicio.php");
?>