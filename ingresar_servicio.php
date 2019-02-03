<html>
    <head>
        <meta charset="utf-8">
        <link href="servi.css" type="text/css" rel="stylesheet">
        <title>Agregar Servicio</title>
     </head>
   
<body>
    <div class="container">
        
        <form id="contact" action="Agregar_servicio.php" method="POST">
            
   <h3>Bienvenido</h3>
          <h4>INGRESO SERVICIO</h4>
                <fieldset>
                    <input placeholder="Ingrese Codigo" type="id_servicio"  name="id_servicio" tabindex="1" required autofocus>
                </fieldset>
                <fieldset>
                    <input placeholder="Ingrese Descripcion" type="descripcion_servicio" name="descripcion_servicio" pattern="[a-zA-ZàáâäãåąčćęèéêëėįìíîïłńòóôöõøùúûüųūÿýżźñçčšžÀÁÂÄÃÅĄĆČĖĘÈÉÊËÌÍÎÏĮŁŃÒÓÔÖÕØÙÚÛÜŲŪŸÝŻŹÑßÇŒÆČŠŽ∂ð ,.'-]{2,64}" tabindex="2" required autofocus>
                </fieldset>
                <fieldset>
                    <input placeholder="Ingrese Tipo Servicio" type="tipo_servicio" name="tipo_servicio" pattern="[a-zA-ZàáâäãåąčćęèéêëėįìíîïłńòóôöõøùúûüųūÿýżźñçčšžÀÁÂÄÃÅĄĆČĖĘÈÉÊËÌÍÎÏĮŁŃÒÓÔÖÕØÙÚÛÜŲŪŸÝŻŹÑßÇŒÆČŠŽ∂ð ,.'-]{2,64}" tabindex="2" required autofocus>
                </fieldset>
                <fieldset>
                    <input placeholder="IngresePrecio" type="precio" name="precio" tabindex="3" required autofocus>
                </fieldset>
         
                <fieldset>
                    <button name="submit" type="Registrar" value="click me"  onclick="msg() ">REGISTRAR SERVICIO</button>
                    
                </fieldset>
          <fieldset>
                <button name="submit" type="Cancelar"  onclick="location.href='index_Servicio.php'">CANCELAR</button>
          </fieldset>   
             
          </form>
          <script>
        function msg()
        {
            alert("Ha ingresado los datos Correctamente!!!");
        }
        </script>
          
    </div>

    </table>
   </form>
       
    
</body>



    
</html>