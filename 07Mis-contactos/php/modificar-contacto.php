<?php
//Asigno a variables php los valores que vienen del formulario, como el campo del email esta desabilitado en el form php no lo reconoce Por eso tengo que guardar su valor en un campo oculto
$email = $_POST["email_hdn"];
$nombre = $_POST["nombre_txt"];
$sexo = $_POST["sexo_rdo"];
$nacimiento = $_POST["nacimiento_txt"];
$telefono = $_POST["telefono_txt"];
$pais = $_POST["pais_slc"];

include("conexion.php");
$consulta = "SELECT * FROM contactos WHERE email='$email'";
$ejecutar_consulta = $conexion->query($consulta);
$num_regs = $ejecutar_consulta->num_rows;

if($num_regs == 1){
    
    //Si la foto viene vacia asignamos el valor del boton oculto dela foto que tiene el valor anterior de la busqueda, sino subo la nueva foto y reemplazo el valor
    if(empty($_FILES["foto_fls"]["tmp_name"]))
    {
        $imagen = $_POST["foto_hdn"];
    }
    else
    {
        //Se ejecuta la funcion para subir imagen
        include("funciones.php");
        $tipo = $_FILES["foto_fls"]["type"];
        $archivo = $_FILES["foto_fls"]["tmp_name"];
        $imagen = subir_imagen($tipo,$archivo,$email);
    }

    //Actualizo los datos a la BD
    $consulta = "UPDATE contactos SET nombre='$nombre', sexo='$sexo', nacimiento='$nacimiento', telefono='$telefono', pais='$pais', imagen='$imagen' WHERE email='$email'";
    $ejecutar_consulta = $conexion->query($consulta);

    if($ejecutar_consulta)
    {
        $mensaje="Se han hecho los cambios de los datos del contacto <b>$email</b> 👌";
    }
    else
    {
        $mensaje="No se pudieron hacer los cambios del contacto con el email <b>$email</b> 😥";
    }
}
else
{
    $mensaje = "No se pudo hacer cambio de datos al contacto; el email <b>$email</b> no existe";
}
$conexion->close();
header("Location: ../index.php?op=cambios&mensaje=$mensaje"); 
?>