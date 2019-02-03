<html>
    <head>
        <meta charset="UTF-8">
        <link href="servi.css" type="text/css" rel="stylesheet">
        <title></title>
    </head>
    <body>
<?php
$id= $_GET['tipo_servicio'];
try {
    require_once('conexion.php');
    $sql = "select * from servicio where tipo_servicio='$id'";
    $result=$conn->query($sql);
    $datos = $result->fetch_assoc(); 
} catch (Exception $e) {
    $error = $e->getMessage();
}
?>
         
<div class="container">
    <form id="contact" action="Buscar.php" method="GET">
<h3>Bienvenido</h3>
<h4>Datos a buscar</h4>

<fieldset>
    <input name="descripcion_servicio"type="descripcion_servicio" value="<?php echo $datos['descripcion_servicio']; ?>" disabled>
</fieldset>
<fieldset>
    <input  name="tipo_servicio" type="tipo_servicio" value="<?php echo $datos['tipo_servicio']; ?>"  disabled>
</fieldset>
<fieldset>
  <input name="precio" type="precio" pattern="[0-9]*" value="<?php echo $datos['precio']; ?>"  disabled >
</fieldset>

<fieldset>
  <button name="submit" name="Regresar" type="Registrar"  data-submit="...Sending">Regresar</button>
</fieldset>
</form>
    
</div>
    </body>
</html>
