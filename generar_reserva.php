<!DOCTYPE html>
<html lang="es" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link href="generar_reserva.css" type="text/css" rel="stylesheet">
    <title></title>
  </head>
  <body>
    <div class="container">
      <form id="contact" action="ingresar_reserva.php" method="post">
        <h3>Bienvenido</h3>
        <h4>Ingrese los datos de su reserva </h4>
<fieldset>
    <label for="fecha">&nbsp;&nbsp;Ingrese la cedula del cliente: &nbsp;&nbsp;&nbsp;</label><br>
    <input type="text" name="cedula_cliente" tabindex="1" required autofocus><br>
    <label for="fecha">&nbsp;&nbsp;Ingrese la fecha de su reserva: &nbsp;&nbsp;&nbsp;</label><br>
    <input type="date" name="fecha_reserva" tabindex="1" required autofocus><br>
    <label for="time">&nbsp;&nbsp;Ingrese la hora de su reserva: &nbsp;&nbsp;&nbsp;</label><br>
    <input type="time" name="hora_reserva" tabindex="2" required autofocus><br>
    <label for="dirección">&nbsp;&nbsp;Ingrese la dirección de su reserva: &nbsp;&nbsp;&nbsp; </label><br>
    <input type="text" name="direccion" required autofocus> <br>
    <label for="servicio">&nbsp;&nbsp;Escoja un tipo de servicio a reservar: &nbsp;&nbsp;&nbsp; </label><br>
    <select name="option:name">
       <option name="express" value="express">express</option>
       <option name="mediana" value="mediana">mediana</option>
       <option name="especial" value="especial">especial</option>
       
    </select> <br>
    <label for="descripcion">&nbsp;&nbsp;Ingrese la una pequeña descripcion : &nbsp;&nbsp;&nbsp;</label><br>
    <textarea placeholder="Ingrese la descripcion" name="descripcion_reserva"  tabindex="3" required autofocus></textarea><br>
    <button type="submit" name="submit" value="Registrar" >Generar Reserva</button>
</fieldset>
        
        <input type="button" value="Regresar" onClick=" window.location.href='http://webapp.espoch.edu.ec/webapp11/reserva1/reserva.php'" > </button>
</form>
</div>
 
    </body>
</html>
