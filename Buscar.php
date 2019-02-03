<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link href="buscar_ser2.css" type="text/css" rel="stylesheet">
    <title></title>
  </head>
  <body>
    <div class="container">
        <form id="contact" action="Buscar_servi.php" method="get">
        <h3>Buscar Servicios</h3>
        <h4>Datos a Buscar </h4>
  <fieldset>
  <p>Ingrese el tipo de servicio a buscar:</p>
  <input placeholder="Tipo Servicio" name="tipo_servicio" type="tipo_servicio" pattern="[a-zA-ZàáâäãåąčćęèéêëėįìíîïłńòóôöõøùúûüųūÿýżźñçčšžÀÁÂÄÃÅĄĆČĖĘÈÉÊËÌÍÎÏĮŁŃÒÓÔÖÕØÙÚÛÜŲŪŸÝŻŹÑßÇŒÆČŠŽ∂ð ,.'-]{2,64}" tabindex="2" required autofocus >
  <button name="submit" type="Buscar" name="Buscar" data-submit="...Sending">Buscar</button>
  </fieldset>
   <fieldset>
          <button name="submit" type="Cancelar"  onclick="location.href='index_Servicio.php'">CANCELAR</button>
 </fieldset> 
  </form>
  </div>
  </body>
</html>