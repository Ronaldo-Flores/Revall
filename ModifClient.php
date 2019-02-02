<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
   <?php
        // put your code here
   $cedula=$_GET['Cedula'];
   $nombre=$_GET['Nombre'];
   $apellido=$_GET['Apellido'];
   $genero=$_GET['Genero'];
   $email=$_GET['Email'];
   $telefono=$_GET['Telefono'];
   $contrasena=$_GET['password'];
   $direccion=$_GET['Direccion'];

// echo "$sql";
// exit();
try {
    require_once 'conexion.php';
    $sql="UPDATE cliente set nombre='$nombre',apellido='$apellido',genero='$genero',email='$email',numero_telefono='$telefono',contrasena='$contrasena',direccion_cliente='$direccion' where cedula_cliente='$cedula'";
    $resul=$conn->query($sql);

    } catch (Exception $e) {
    $error=$e->getMessage();
    }
        header("location:ModificarCliente.php");
        ?>
    </body>
</html>
