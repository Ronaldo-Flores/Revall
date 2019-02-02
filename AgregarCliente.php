<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Agregar</title>
    </head>
    <body>
        
   <?php
   $cedula_cliente=$_POST['Cedula'];
   $nombre=$_POST['Nombre'];
   $apellido=$_POST['Apellido'];
   $genero=$_POST['Genero'];
   $email=$_POST['Email'];
   $numero_telefono=$_POST['Telefono'];
   $usuario=$_POST['Usuario'];
   $contrasena=$_POST['password'];
   $direccion_cliente=$_POST['Direccion'];

        try
        {
            require_once('conexion.php');
            $sql="insert into cliente(cedula_cliente,nombre,apellido,genero,email,numero_telefono,usuario,contrasena,direccion_cliente)"
                    . "values('$cedula_cliente','$nombre','$apellido','$genero','$email','$numero_telefono','$usuario','$contrasena','$direccion_cliente')";
            $result=$conn->query($sql);                  
        }
        catch (Exception $e)
        {
            $error=$e->getMessage();
        }
        header("location:IngresarClienteAdmin.php");
        ?>
    </body>
</html>