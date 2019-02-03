<html>
    <head>
        <meta charset="UTF-8">
        <link href="eliminar.css" type="text/css" rel="stylesheet">
        <title></title>
    </head>
    <body>
        <?php
$tipo= $_GET['tipo_servicio'];
try {
    require_once('conexion.php');
    $sql = "select * from servicio where tipo_servicio='$tipo'";
    $result=$conn->query($sql);
    $datos = $result->fetch_assoc(); 
} catch (Exception $e) {
    $error = $e->getMessage();
}
?>
        
<div class="container">
<form id="contact" action="modificar.php" method="GET">
<h3>Bienvenido</h3>
<h4>Ingrese los datos del servicio a modificar</h4>
<fieldset>
  <input placeholder="Ingrese Descripcion Servicio" value="<?php echo $datos['descripcion_servicio']; ?>" name="descripcion_servicio"type="descripcion_servicio" tabindex="2" required autofocus>
</fieldset>
<fieldset>
  <input placeholder="Tipo Servicio" name="tipo_servicio" value="<?php echo $datos['tipo_servicio']; ?>"type="tipo_servicio" tabindex="3" required autofocus>
</fieldset>
<fieldset>
  <input placeholder="Precio" name="precio"value="<?php echo $datos['precio']; ?>" pattern="[0-9]*" type="precio" tabindex="4" required>
</fieldset>

<fieldset>
 <button name="submit" name="Eliminar" type="Eliminar" value="click me"  onclick="msg()">MODIFICAR SERVICIO</button>
 <input type="hidden" name="tipo_servicio" value="<?= $tipo; ?>">
</fieldset>
 <fieldset>
          <button name="submit" type="Cancelar"  onclick="location.href='index_Servicio.php'">CANCELAR</button>
 </fieldset> 
</form>
    <script>
        function msg()
        {
            alert("Se ha modificado los datos Correctamente!!!");
        }
        </script>
</div>
    </body>
</html>