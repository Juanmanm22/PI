<html>
    <head>
        <title>GESTION USUARIOS</title>
        <link rel="stylesheet" href="style.css"/>


<?php

//Recogemos los datos del formulario
$Gmail=$_POST['Gmail'];
$Nombre=$_POST['Nombre'];
$Apellidos=$_POST['Apellidos'];
$Aplicaciones=$_POST['Aplicaciones'];
$Fecha=$_POST['Fecha'];



//Comprobamos los campos pasados en el formulario:
//El telefono no puede esta vacio y el nombre debe tener tres o mas carácteres

   // Si se satisfacen esas condiciones se realiza la conexión
   $conexion=mysqli_connect("localhost", "root", "Juanma22_", "usuarios");

   // Si la conexión se realiza con éxito
   if ($conexion) {
        echo "<h2>Conexión establecida con el servidor</h2>";


        // Si no hay un cliente con ese se produce la inserción.
            echo "Añadiendo aplicaciones al usuario ".$Gmail." a ".$Fecha."";

            $insertar="INSERT INTO usuario (Gmail, Nombre, Apellidos, Aplicaciones, Fecha) VALUES (\"".$Gmail."\", \"".$Nombre."\", \"".$Apellidos."\", \"".$Aplicaciones."\", \"".$Fecha."\")";


            $result=mysqli_query($conexion, $insertar);

            echo "Los datos se insertaron correctamente.<br>";
        $boton = "<form action=\"index.php\" method=\"POST\">"
            ."<input type=\"submit\" value=\"Inicio\">"
        ."</form>";
        echo $boton;

        // Si ya hay un cliente con ese telefono no se inserta la tupla

        // Terminado el proceso de inserción, cerramos la conexión y lo notificamos
        if(mysqli_close($conexion)){ 
            echo "<h2>Conexión cerrada con exito</h2>";         
        // Si al cerrar se produce un error lo notificamos
    // En caso de no poder conectar indicamos un mensaje de error.
    } else { 
            echo "<h2>ERROR: No ha sido posible establecer la conexión con el servidor.</h2>";
}
}
?>
</html>
