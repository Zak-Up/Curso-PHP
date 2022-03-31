<?php 
//Incluyo el archivo a la conexion de la BD
include("conexion.php");
//Construto el query para traer los registros en el select del HTML
$consulta = "SELECT email FROM contactos ORDER BY email";
//Ejecuto el query
$ejecutar_consulta = $conexion->query($consulta);
//Con un while recoorro todos los registros generados en la consulta anterior; Construyo las opciones del select de forma dinamica con los registros de la consulta
while($registro = $ejecutar_consulta->fetch_assoc())
{
    echo "<option value='".$registro["email"]."'";
    if($_GET["contacto_slc"]==$registro["email"])
    {
        echo " selected";
    }
    echo ">".$registro["email"]."</option>";
}
// $conexion->close();
// header("Location: ../index.php?op=baja&mensaje=$mensaje");
?>