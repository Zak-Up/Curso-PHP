<?php
//Pasos para conectarme a una BD MySQL con PHP
//1) Conectarme al BD, mysql_conect necesita 3 datos
    //1)Servidor
    //2)Usuario de la BD
    //3)Password del usuario de la BD

$conexion = mysqli_connect("localhost","root","") or die("No se pudo conectar con el servidor de BD");
echo "Estoy conectado a MySQL <br>";

//2) Seleccionar la BD con la que vamos a trabajar
mysqli_select_db($conexion,"mis_contactos") or die("No se pudo seleccionar la BD 'mis_contactos'");
echo "BD seleccionada: mis_contactos<br>";

//3) Crear una consulta SQL
$consulta = "SELECT * FROM pais";

//4)Ejecutar la consulta SQL
$ejecutar_consulta = mysqli_query($conexion,$consulta) or die ("No se pudo ejecutar la consulta a la BD");
echo "Se ejecuto la consulta SQL <br>";

//5)Mostrar el resultado de ejecutar la consulta, dentro de un ciclo y en una variable, voy a ingresar la funcion mysqli_fecth_array

while($registro = mysqli_fetch_array($ejecutar_consulta)){
    echo $registro["id_pais"]."-".$registro["pais"]."<br>";
}

//6)Cerrar la conexion a la BD
mysqli_close($conexion) or die("Ocurrio un error al cerrar la BD");
echo "Conexion cerrada";



?>