<html>
    <head>
        <title>GESTION USUARIOS</title>
        <link rel="stylesheet" href="style.css"/>

<?php

$conn=mysqli_connect("localhost","root","Juanma22_","usuarios");
$result=mysqli_query($conn,"SELECT *  FROM usuario");

$tabla = "<table border=\"1\">"
            ."<tr>"
                ."<th>Gmail</th>"
                ."<th>Nombre</th>"
                ."<th>Apellidos</th>"
                ."<th>Aplicaciones</th>"
                ."<th>Fecha</th>"
            ."</tr>";
            while ($insta = $result->fetch_assoc()) {   
                    $tabla .= "<tr> <td>".$insta['Gmail']."</td>"
                                ."<td>".$insta['Nombre']."</td>"
                            ."<td>".$insta['Apellidos']."</td>"
                            ."<td>".$insta['Aplicaciones']."</td>"
                            ."<td>".$insta['Fecha']."</td>"
                            ."</tr>";
                }
$tabla .= "</table>";
echo $tabla;
echo "<br>";
$boton = "<form action=\"index.php\" method=\"POST\">"
            ."<input type=\"submit\" value=\"Inicio\">"
        ."</form>";

echo $boton;
?>
</html>