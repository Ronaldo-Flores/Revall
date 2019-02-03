<html>
    <head>
        <title>Actualizar tabla reportes </title>
        <link href="buscar.css" type="text/css" rel="stylesheet">
    </head>
    <body>
    <?php
    $ci= $_GET['cedula'];
    try {
        require_once('conexion.php');
        $sql = "select * from reserva where cedula_cliente='$ci' ";
        $result=$conn->query($sql);
        $datos = $result->fetch_assoc(); 
        
        } catch (Exception $e) {
            $error = $e->getMessage();
            }
            ?>
        <div class="container" >
            <fieldset>
                <div id="contact">
                    <h2><br><center>  Ingresar los nuevos datos </center></h2><br>
                    <H1></H1>
                    <FORM ACTION="modifica.php" method="POST">
                        <TABLE>
                            <TR>
                                <TD>Fecha:&nbsp;&nbsp;&nbsp;</TD><TD><INPUT TYPE="date" NAME="fecha_reserva" SIZE="20" MAXLENGTH="30" value="<?PHP echo $datos['fecha_reserva']; ?>"></TD>
                            </TR>
                            <TR>
                                <TD>Descripcion:&nbsp;&nbsp;&nbsp;</TD><TD><INPUT TYPE="text" NAME="descripcion_reserva" SIZE="20" MAXLENGTH="30"value="<?PHP echo $datos['descripcion_reserva']; ?>"></TD>
                            </TR>                        
                            <TR>
                                <TD>Hora:&nbsp;&nbsp;&nbsp;</TD><TD><INPUT TYPE="time" NAME="hora_reserva" SIZE="20" MAXLENGTH="30"value="<?PHP ECHO$datos['hora_reserva']; ?>"></TD>
                            </TR>
                            <TR>
                                <TD>Direccion:&nbsp;&nbsp;&nbsp;</TD><TD><INPUT TYPE="text" NAME="direccion" SIZE="20" MAXLENGTH="30"value="<?PHP ECHO $datos['direccion']; ?>"></TD>
                            </TR>
                        </TABLE>
                        <br>
                        <INPUT TYPE="submit" NAME="accion" VALUE="Modificar">     
                        <input type="hidden" name="id_reserva" value="<?= $datos['id_reserva']; ?>">
                    </FORM>
                </div>
            </fieldset>
        </div>
    </body>
</html>



