<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
      <link href="EliminarCliente.css" type="text/css" rel="stylesheet">
    <title></title>
  </head>
  <body>
    <div class="container">
        <form id="contact" action="EliminarClient.php" method="get">
        <h3>Eliminar Cliente</h3>
        <h4>Datos a Eliminar </h4>
  <fieldset>
  <p>Ingrese Cédula del cliente a eliminar:</p>
  <input placeholder="- - - - - - - - - -" name="Cedula" type="Cedula" pattern="[0-9]{10}" >
  <button name="submit" type="Buscar" name="Buscar" data-submit="...Sending">Buscar</button>
  </fieldset>

 </fieldset>
  <fieldset>
  <button name="submit" type="Cancelar" name="Cancelar" data-submit="...Sending">Cancelar</button>
  </fieldset>
  </form>
  </div>
  </body>
</html>
