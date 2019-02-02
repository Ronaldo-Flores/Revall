<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <link href="IngresarClienteAdmin.css" type="text/css" rel="stylesheet">
        <title></title>
    </head>
    <body>
<?php
$id= $_GET['Cedula'];
try {
    require_once('conexion.php');
    $sql = "select * from cliente where cedula_cliente=$id";
    $result=$conn->query($sql);
    $datos = $result->fetch_assoc(); 
} catch (Exception $e) {
    $error = $e->getMessage();
}
?>
        
<div class="container">
<form id="contact" action="ElimClient.php" method="GET">
<h3>Bienvenido</h3>
<h4>Verifique los Datos a eliminar</h4>

<fieldset>
    <input name="Nombre"type="Nombre" value="<?php echo $datos['nombre']; ?>" disabled>
</fieldset>
<fieldset>
    <input  name="Apellido" type="Apellido" value="<?php echo $datos['apellido']; ?>"  disabled>
</fieldset>
<fieldset>
  <input name="Telefono" type="Telefono" pattern="[0-9]*" value="<?php echo $datos['numero_telefono']; ?>"  disabled >
</fieldset>
<fieldset>
  <input name="Email" type="Email" tabindex="6" value="<?php echo $datos['email']; ?>" disabled>
</fieldset>
<fieldset>
  <input name="Direccion" type="Direccion" value="<?php echo $datos['direccion_cliente']; ?>" disabled >
</fieldset>
<fieldset>
  <input  name="Usuario" type="Usuario" value="<?php echo $datos['usuario']; ?>" disabled>
</fieldset>
<fieldset>
  <button name="submit" name="Eliminar" type="Registrar"  data-submit="...Sending">Eliminar Cliente</button>
   <input type="hidden" name="Cedula" value="<?= $id; ?>">
</fieldset>
</form>
</div>
       
    </body>
</html>
