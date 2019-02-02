<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->

<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
      <link href="BuscModifCliente.css" type="text/css" rel="stylesheet">
    <title></title>
  </head>
  <body>
    <div class="container">
      <form id="contact" action="" method="post">
        <h3>Modificar</h3>
        <h4>Datos a Modificar </h4>
  <fieldset>
  <p>Ingrese Cédula a buscar:</p>
  <input placeholder="- - - - - - - - - -" id="Cedula" type="Cedula" pattern="[0-9]{10}" >
  </fieldset>

  <fieldset>
  <button name="submit" type="Modificar" id="BuscModfCliente" data-submit="...Sending">Modificar Cliente</button>
  <button name="submit" type="Cancelar" id="Cancelar" data-submit="...Sending">Cancelar</button>
  </fieldset>
  </form>
  </div>
  </body>
</html>
