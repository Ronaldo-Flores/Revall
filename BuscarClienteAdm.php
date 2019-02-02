<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
      <link href="BuscarClienteAdm.css" type="text/css" rel="stylesheet">
    <title></title>
  </head>
  <body>
    <div class="container">
        <form id="contact" action="BuscarClientAdm.php" method="get">
        <h3>Buscar Cliente</h3>
        <h4>Datos a Buscar </h4>
  <fieldset>
  <p>Ingrese Cédula del cliente a Buscar:</p>
  <input placeholder="- - - - - - - - - -" name="Cedula" type="cedula" pattern="[0-9]{10}" >
  <button name="submit" type="Buscar" name="Buscar" data-submit="...Sending">Buscar</button>
  </fieldset>
  <fieldset>
  <button name="submit" type="Salir" id="Salir" data-submit="...Sending">Salir</button>
  </fieldset>
  </form>
  </div>
  </body>
</html>
