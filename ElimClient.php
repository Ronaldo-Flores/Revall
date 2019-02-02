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

// echo "$sql";
// exit();
try {
    require_once 'conexion.php';
    $sql="delete from cliente where cedula_cliente='$cedula'";
    $resul=$conn->query($sql);

    } catch (Exception $e) {
    $error=$e->getMessage();
    }
        header("location:EliminarCliente.php");
        ?>
    </body>
</html>
