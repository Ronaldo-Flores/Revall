<?php
$fecha=$_POST['fecha_reserva'];
$direccion=$_POST['direccion'];
$descripcion=$_POST['descripcion_reserva'];
$hora=$_POST['hora_reserva'];
$servicio=$_POST['servicio'];
$cedula=$_POST['cedula_cliente'];

try{
    require_once ('conexion.php');
    echo "$servicio";
    if($servicio='express'){
            $dato=2;
    }
        else {
            if($servicio='mediana'){
            $dato=3;
            } else {
                $dato=4;
            }
        }
        echo "$dato";
    $sql="insert into reserva(cedula_cliente,id_servicio,fecha_reserva, direccion, descripcion_reserva, hora_reserva)
            values('$cedula','$dato',$fecha','$direccion','$descripcion','$hora')";  
    
    $result=$conn->query($sql);
   } 
catch (Exception $e) 
{
  $error = $e->getMessage();
}
echo "$sql";
//header("location:generar_reserva.php");
?>

