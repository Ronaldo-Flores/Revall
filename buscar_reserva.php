<!DOCTYPE html>
<html lang="es" dir="ltr">
    <head>
        <meta charset="utf-8">
        <link href="generar_reserva.css" type="text/css" rel="stylesheet">
        <title>Buscar Reserva</title>
    </head>
    <body>
        <fieldset>
            <div class="container">
                <form id="contact" action="cedula_buscar.php" method="get" >
                    <h3>Bienvenido</h3>
                    <h4>Desea buscar los datos de su reserva </h4>
                    <label for="mail">&nbsp;&nbsp;Ingrese su cedula: &nbsp;&nbsp;&nbsp;</label><br>
                    <input type="text" name="cedula"><br><br>
                    <input type="submit" name="submit" value="Buscar Reserva" >
                    <br>
                    <input type="button" value="Cancelar" onClick=" window.location.href='http://webapp.espoch.edu.ec/webapp11/reserva1/reserva.php'" > </button>
                </form>
            </div>
        </fieldset>
    </body>
</html>
        