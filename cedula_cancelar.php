<!DOCTYPE html>
<html lang="es" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link href="generar_reserva.css" type="text/css" rel="stylesheet">
    <title></title>
  </head>
<?php
function validarCI($strCedula)
{
    if(is_null($strCedula) || empty($strCedula))
        {
            echo "Por Favor Ingrese la Cedula";
            header('Location:buscar_reserva_cancelar.php');            
        }
        else
            {
            if(is_numeric($strCedula))
                { 
                $total_caracteres=strlen($strCedula);
                if($total_caracteres==10)
                    {
                    $nro_region=substr($strCedula, 0,2);
                    if($nro_region>=1 && $nro_region<=24)
                        {
                        $ult_digito=substr($strCedula, -1,1);
                        $valor2=substr($strCedula, 1, 1);
                        $valor4=substr($strCedula, 3, 1);
                        $valor6=substr($strCedula, 5, 1);
                        $valor8=substr($strCedula, 7, 1);
                        $suma_pares=($valor2 + $valor4 + $valor6 + $valor8);
                        $valor1=substr($strCedula, 0, 1);
                        $valor1=($valor1 * 2);
                        if($valor1>9)
                            { 
                            $valor1=($valor1 - 9); 
                            
                            }
                            $valor3=substr($strCedula, 2, 1);
                            $valor3=($valor3 * 2);
                            if($valor3>9)
                                { 
                                $valor3=($valor3 - 9); 
                                
                                }
                                $valor5=substr($strCedula, 4, 1);
                                $valor5=($valor5 * 2);
                                if($valor5>9)
                                    { 
                                    $valor5=($valor5 - 9); 
                                    
                                    }
                                    $valor7=substr($strCedula, 6, 1);
                                    $valor7=($valor7 * 2);
                                    if($valor7>9)
                                        { 
                                        $valor7=($valor7 - 9); 
                                        
                                        }
                                        $valor9=substr($strCedula, 8, 1);
                                        $valor9=($valor9 * 2);
                                        if($valor9>9)
                                            { 
                                            $valor9=($valor9 - 9); 
                                            
                                            }
                                            $suma_impares=($valor1 + $valor3 + $valor5 + $valor7 + $valor9);
                                            $suma=($suma_pares + $suma_impares);
                                            $dis=substr($suma, 0,1);
                                            $dis=(($dis + 1)* 10);
                                            $digito=($dis - $suma);
                                            if($digito==10)
                                                {
                                                $digito='0'; 
                                                
                                                }
                                                if ($digito==$ult_digito)
                                                    {
                                                    
                                                    ?>
  
<div class: contenedor>
    <main>    
        <section>
            <article> <h2>Buscar registro</h2> <br>
           </article>
            <article>      
          <?php
          $dato =$_GET['cedula'];
          try {
    require_once('conexion.php');
    $sql = "select fecha_reserva,descripcion_reserva,hora_reserva,direccion from reserva  where (cedula_cliente=$dato) ";
  
    $result=$conn->query($sql);
} catch (Exception $e) {
    $error = $e->getMessage();
}
printf("<h2><center>....Esta Busqueda</h2></center><p>");
?>
        <TABLE BORDER=1 CELLSPACING=1 CELLPADDING=1>
        <TR>
                <Th>&nbsp;Fecha </Th>
                <Th>&nbsp;Descripcion&nbsp;</Th>
                <Th>&nbsp;hora &nbsp;</Th>
                <Th>&nbsp;direccion &nbsp;</Th>
        </TR>
        <form name="form1" method="GET" action="borra.php">
<?php
$i=0;
while($row = $result->fetch_array())
{
        printf("
        <tr>
                <td>&nbsp;%s</td>
                <td>&nbsp;%s&nbsp;</td>
                <td>&nbsp;%s&nbsp;</td>
                <td>&nbsp;%s&nbsp;</td>
                </td><td><a href=\"borra.php?cedula=%s\">Borra</a></td></tr>",$row["fecha_reserva"],$row["descripcion_reserva"],$row["hora_reserva"],$row["direccion"],$dato);

                $i=$i+1;
}
?>
        </form>
        <?php
$result->close();
$conn->close();
//printf($i);
// $i=$result->num_rows;
        if ($i==0)
        {
                printf("<p><center><h3>Datos No Encontrados</h3></center>");
        }
printf("Datos encontrados... "); 
printf($i);
?></article>                
            </section>         
        </main>
     </div>
<?php
                                                    }
                                                    else
                                                        {
                                                        echo "Cedula Incorrecta";
                                                        
                                                        }
                                                        
                                                        }
                                                        else
                                                            {
                                                            echo "Este Nro de Cedula no corresponde a ninguna provincia del ecuador";
                                                            
                                                            }
                                                            
                                                            }
                                                            else
                                                                {
                                                                echo "Es un Numero pero tiene ".$total_caracteres;
                                                                
                                                                }
                                                                
                                                                }
                                                                else
                                                                    {
                                                                    echo "Esta Cedula no corresponde a un Nro de Cedula de Ecuador";
                                                                    
                                                                    }
                                                                    
                                                                    }
                                                                    
                                                                    }
                                                                    $accion=$_GET["accion"];
                                                                    $cedula=validarCI($_GET["cedula"]);
                                                                    if($accion=="Buscar Reserva")
                                                                        {
                                                                        echo $cedula;
                                                                        
                                                                        }
                                                                        else
                                                                            {
                                                                            echo "   no hay nada  ";
                                                                            
                                                                            }
                                                                         ?>