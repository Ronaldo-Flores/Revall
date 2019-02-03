
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
    <form id="contact" action="eliminar.php" method="GET">
<h3>Bienvenido</h3>
<h4>Verifique los Datos a eliminar</h4>

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
  <button name="submit" name="Eliminar" type="Eliminar" value="click me"  onclick="msg()">Eliminar Servicio</button>
   <input type="hidden" name="id_servicio" value="<?= $id; ?>">
</fieldset>
</form>
    <script>
        function msg()
        {
            alert("Desea Eliminar!!!");
        }
        </script>
</div>
       
    </body>
</html>