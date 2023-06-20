<html>
    <head>
        <title>Lista de Instalaciones</title>
        <link rel="stylesheet" href="style.css"/>
    </head>

<?php

$conn = mysqli_connect("localhost", "root", "Juanma22_", "usuarios");
// Si la conexión tiene éxito lo notificamos
if ($conn){ 
        echo "<h1 id=\"Sec\">Bienvenido a la página de gestion de clientes.</h1>";
        echo "<h4>Insertar un Cliente.</h1>";
    
        // Ahora vamos a extraer los datos de los clientes.
        echo "<div class=\"cont\">";
         echo "<form action=\"InsertarUsuariosPI.php\" method=\"POST\">
            <table>
              <tr> 
                <td> Gmail: </td> 
                <td> <input type=\"text\" name=\"Gmail\" > </td>
              </tr>
              <tr> 
                <td> Nombre: </td> 
                <td> <input type=\"text\" name=\"Nombre\" > </td>
              </tr>
              <tr> 
                <td> Apellidos: </td> 
                <td> <input type=\"text\" name=\"Apellidos\" > </td>
              </tr>
              <tr> 
                <td> Aplicaciones: </td> 
                <td> <input type=\"text\" name=\"Aplicaciones\" > </td>
              </tr>
              <tr> 
                <td> Fecha: </td> 
                <td> <input type=\"text\" name=\"Fecha\" > </td>
              </tr>

               <td> <input type=\"submit\" value=\"insertar\" > </td>

            </table>
        </form>";
        echo "</div>";


  
       echo "<h1>Listar Usuarios.</h1>";
        echo "<div class=\"container\">";
        // Mostramos el resultado de la consulta propiamente dicho
        echo "<form name=\"listarU\" method=\"POST\" action=\"ListarUsuarios.php\"/>";
            echo "<input type=\"submit\" value=\"listar\"/>";
        echo "</select>\n</form>";
        echo "<div>";

        // Cerramos la conexión y lo notificamos
                if(mysqli_close($conn)){          
        // Si al cerrar se produce un error lo notificamos
        } else {
                        echo "<h2>No se ha cerrado la conexión</h2>"; 
                }

} else {
        echo "<h2>NO HA SIDO POSIBLE ESTABLECER LA CONEXIÓN</h2>";}
?>
</html>