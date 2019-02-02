<html>
<head>
        <title>Ejemplo de PHP</title>
</head>
<body>
<?php
$id= $_GET['id_reserva'];
try {
    require_once('conexion.php');
    $sql = "select * from reserva where id_reserva=$id";
    $result=$conn->query($sql);
    $datos = $result->fetch_assoc(); 
} catch (Exception $e) {
    $error = $e->getMessage();
}

?>

        <H1></H1>
        <FORM ACTION="modifica.php" method="POST">
                <TABLE>
                        <TR>
                                <TD>Fecha:</TD><TD><INPUT TYPE="text" NAME="fecha_reserva" SIZE="20" MAXLENGTH="30" value="<?PHP echo $datos['fecha_reserva']; ?>"></TD>
                        </TR>
                        <TR>
                                <TD>Descripcion:</TD><TD><INPUT TYPE="text" NAME="descripcion_reserva" SIZE="20" MAXLENGTH="30"value="<?PHP echo $datos['descripcion_reserva']; ?>"></TD>
                        </TR>
                        <TR>
                                <TD>Hora:</TD><TD><INPUT TYPE="text" NAME="hora_reserva" SIZE="20" MAXLENGTH="30"value="<?PHP ECHO$datos['hora_reserva']; ?>"></TD>
                        </TR>
                        <TR>
                                <TD>Direccion:</TD><TD><INPUT TYPE="text" NAME="direccion" SIZE="20" MAXLENGTH="30"value="<?PHP ECHO $datos['direccion']; ?>"></TD>
                        </TR>
                        
        </TABLE>
        <INPUT TYPE="submit" NAME="accion" VALUE="Modificar">
        <input type="hidden" name="id_reserva" value="<?= $datos['id_reserva']; ?>">
</FORM>

</body>
</html>


