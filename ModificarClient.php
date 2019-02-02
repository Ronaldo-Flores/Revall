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
<form id="contact" action="ModifClient.php" method="GET">
<h3>Bienvenido</h3>
<h4>Ingrese sus Datos Personales</h4>
<fieldset>
  <input placeholder="Ingrese Nombre(s)" value="<?php echo $datos['nombre']; ?>" name="Nombre"type="Nombre" tabindex="2" required autofocus>
</fieldset>
<fieldset>
  <input placeholder="Ingrese Apellido(s)" name="Apellido" value="<?php echo $datos['apellido']; ?>"type="Apellido" tabindex="3" required autofocus>
</fieldset>
<fieldset>
  <input placeholder="Número de contacto" name="Telefono"value="<?php echo $datos['numero_telefono']; ?>" pattern="[0-9]*" type="Telefono" tabindex="4" required>
</fieldset>
<fieldset>
  <input type="radio" id="Genero" name="Genero" value="Femenino" tabindex="5" required>Femenino &nbsp&nbsp&nbsp&nbsp
  <input type="radio" id="Genero" name="Genero" value="Masculino"tabindex="5" required>Masculino
</fieldset>
<fieldset>
  <input placeholder="Email@extencion.com" name="Email" value="<?php echo $datos['email']; ?>" type="Email" tabindex="6" required>
</fieldset>
<fieldset>
  <input placeholder="Ingrese Direccion" name="Direccion" value="<?php echo $datos['direccion_cliente']; ?>" type="Direccion" tabindex="7" required>
</fieldset>
<fieldset>
    <input placeholder="Contraseña" name="password" value="<?php echo $datos['contrasena']; ?>" type="password" tabindex="8" required>
</fieldset>
<fieldset>
 <button name="submit" name="Eliminar" type="Registrar"  data-submit="...Sending">Modificar Cliente</button>
 <input type="hidden" name="Cedula" value="<?= $id; ?>">
</fieldset>
</form>
</div>
    </body>
</html>
