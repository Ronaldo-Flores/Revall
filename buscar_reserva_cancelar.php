<!DOCTYPE html>
<html lang="es" dir="ltr">
    <head>
        <meta charset="utf-8">
        <link href="generar_reserva.css" type="text/css" rel="stylesheet">
        <title>Buscar Reserva para Cancelar</title>
    </head>
    <body>
        <fieldset>
            <div class="container">
                <form id="contact" action="cedula_cancelar.php" method="GET" >
                    <h3>Bienvenido</h3>
                    <h4>Desea cancelar su reserva </h4>                
                    <label for="mail">&nbsp;&nbsp;Ingrese su cedula: &nbsp;&nbsp;&nbsp;</label><br>
                    <input type="text" name="cedula"><br><br>
                    <input type="submit" name="buscar" value="Buscar Reserva" >
                    <br>
                    <input type="button" value="Cancelar" onClick=" window.location.href='http://webapp.espoch.edu.ec/webapp11/reserva1/reserva.php'" > </button> 
                </form> 
            </div>
        </fieldset>
   </body>
</html>
