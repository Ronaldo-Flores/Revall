<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link href="IngresarClienteAdmin.css" type="text/css" rel="stylesheet">
    <title></title>
  </head>
  <body>
<div class="container">
<form id="contact" action="AgregarCliente.php" method="post">
<h3>Bienvenido</h3>
<h4>Ingrese sus Datos Personales</h4>
<fieldset>
  <input placeholder="Ingrese Cédula" name="Cedula" type="Cedula" pattern="[0-9]{10}" tabindex="1" required autofocus>
</fieldset>
<fieldset>
  <input placeholder="Ingrese Nombre(s)" name="Nombre"type="Nombre" tabindex="2" required autofocus>
</fieldset>
<fieldset>
  <input placeholder="Ingrese Apellido(s)" name="Apellido" type="Apellido" tabindex="3" required autofocus>
</fieldset>
<fieldset>
  <input placeholder="Número de contacto" name="Telefono" pattern="[0-9]*" type="Telefono" tabindex="4" required>
</fieldset>
<fieldset>
  <input type="radio" id="Genero" name="Genero" value="Femenino" tabindex="5" required>Femenino &nbsp&nbsp&nbsp&nbsp
  <input type="radio" id="Genero" name="Genero" value="Masculino"tabindex="5" required>Masculino
</fieldset>
<fieldset>
  <input placeholder="Email@extencion.com" name="Email" type="Email" tabindex="6" required>
</fieldset>
<fieldset>
  <input placeholder="Ingrese Direccion" name="Direccion" type="Direccion" tabindex="7" required>
</fieldset>
<fieldset>
  <input placeholder="Ingrese Usuario" name="Usuario" type="Usuario" tabindex="8" required>
</fieldset>
<fieldset>
    <input placeholder="Contraseña" name="password" type="password" tabindex="9" required>
</fieldset>
<fieldset>
  <button name="submit" name="registrar" type="Registrar"  data-submit="...Sending">Registrar Cliente</button>
</fieldset>
</form>
</div>
  </body>
</html>