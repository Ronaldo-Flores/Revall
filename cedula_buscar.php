<!DOCTYPE html>
<html lang="es" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link href="csstablas.css" type="text/css" rel="stylesheet">
    <link href="buscar.css" type="text/css" rel="stylesheet">
    <title>Datos de Reserva Buscados</title>
  </head>
<?php
function validarCI($strCedula)
{
    if(is_null($strCedula) || empty($strCedula))
        {
            echo "Por Favor Ingrese la Cedula";
            header('Location:buscar_reserva.php');            
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
  <div class="container" >
      <main>    
          <section>
        <?php
        $dato =$_GET['cedula'];
        try {
            require_once('conexion.php');
            $sql = "select * from reserva  where (cedula_cliente=$dato) ";
            $result=$conn->query($sql);
            } catch (Exception $e) {                
                $error = $e->getMessage();                                
                }
                ?>
              <fieldset>       
                  <div id="contact">
                      <h2><br><center> Reserva resulatdo de la busqueda</center></h2><br>
                      <TABLE> 
                          <tr border="1" >
                              <td>&nbsp;Cedula</td>                                 
                              <td>&nbsp;Fecha &nbsp;</td>
                              <td>&nbsp;Descripcion &nbsp;</td>
                              <td>&nbsp;Hora &nbsp;</td>
                              <td>&nbsp;Direccion &nbsp;</td>
                          </tr>
                          <form name="form1" method="post" action="borra.php" >
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
                                      <td>&nbsp;%s&nbsp;</td>
                                      </tr>",$row["cedula_cliente"],$row["fecha_reserva"],$row["descripcion_reserva"],$row["hora_reserva"],$row["direccion"]);
                                  $i=$i+1;                                  
                                  }
                                  ?>
                       </table>
                              <?php
                              $result->close();
                                  $conn->close(); 
                                  if ($i==0)
                                      {
                                      printf("<p><center><h3>Datos No Encontrados</h3></center>");
                                      }
                                      ?>
                      <br><input type="button" value="Cancelar" onClick=" window.location.href='http://webapp.espoch.edu.ec/webapp11/reserva1/buscar_reserva.php'" > </button>
                      <br>
                      </form>
                  </div>
                  
              </fieldset>
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
                              echo "     ";                              
                              }
                              ?>
