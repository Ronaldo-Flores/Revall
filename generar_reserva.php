<!DOCTYPE html>
<html lang="es" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link href="generar_reserva.css" type="text/css" rel="stylesheet">
    <title>Ingreso de datos para Generar Reserva</title>
  </head>
  <body>
    <div class="container">
        <fieldset>
      <form id="contact" action="ingresar_reserva.php" method="get">
        <h3>Bienvenido</h3>
        <h4>Ingrese los datos de su reserva </h4>

    <label for="fecha">&nbsp;&nbsp;Ingrese la cedula del cliente: &nbsp;&nbsp;&nbsp;</label><br>
    <input type="text" name="cedula_cliente" tabindex="1" required autofocus><br>
    <label for="fecha">&nbsp;&nbsp;Ingrese la fecha de su reserva: &nbsp;&nbsp;&nbsp;</label><br>
    <input type="date" name="fecha_reserva" tabindex="1" required autofocus><br>
    <label for="time">&nbsp;&nbsp;Ingrese la hora de su reserva: &nbsp;&nbsp;&nbsp;</label><br>
    <input type="time" name="hora_reserva" tabindex="2" required autofocus><br>
    <label for="dirección">&nbsp;&nbsp;Ingrese la dirección de su reserva: &nbsp;&nbsp;&nbsp; </label><br>
    <input type="text" name="direccion" required autofocus> <br>
    <label for="servicio">&nbsp;&nbsp;Escoja un tipo de servicio a reservar: &nbsp;&nbsp;&nbsp; </label><br>
    <select name="id_servicio">
       <option value="">Escoja un servicio</option>
        <?php 
        require_once "conexion.php";
       $sql=$conn->query("select* from servicio");
       while ($row=$sql->fetch_array()){
       echo "<option value='".$row['id_servicio']."'>".$row['tipo_servicio']."</option>"  ;        
       }
       ?>
    </select> <br>
    <label for="descripcion">&nbsp;&nbsp;Ingrese la una pequeña descripcion : &nbsp;&nbsp;&nbsp;</label><br>
    <textarea placeholder="Ingrese la descripcion de lo que desea en su reserva" name="descripcion_reserva"  tabindex="3" required autofocus></textarea><br>
    <button type="submit" name="submit" value="Registrar" >Generar Reserva</button>
    <input type="button" value="Regresar" onClick=" window.location.href='http://webapp.espoch.edu.ec/webapp11/reserva1/reserva.php'" > </button>
</form>
            </fieldset>
</div>
 
    </body>
</html>
