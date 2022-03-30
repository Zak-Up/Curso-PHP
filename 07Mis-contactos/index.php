<?php
error_reporting(E_ALL ^ E_NOTICE ^ E_WARNING);
$op = $_GET["op"];
switch($op)
{
    case 'alta' :
        $contenido = "php/alta-contacto.php";
        $titulo = "Alta de Contacto";
        break;

    case 'baja' :
        $contenido = "php/baja-contacto.php";
        $titulo = "Baja de Contacto";
        break;

    case 'cambios' :
        $contenido = "php/cambios-contactos.php";
        $titulo = "Cambios a Contacto";
        break;

    case 'consultas' :
        $contenido = "php/consulta-contactos.php";
        $titulo = "Consultas a Contacto";
        break;
    
    default:
        $contenido = "php/home.php";
        $titulo = "Mis Contactos v1";
        break;
};
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title><?php echo $titulo; ?></title>
    <link rel="stylesheet" href="css/mis-contactos.css">
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
    <script>
        !window.jQuery && document.write("<script src='js/jquery.min.js'><\/script>")
    </script>
    <script src="js/mis-contactos.js"></script>
</head>
<body>
    <section id="contenido">
        <nav>
            <ul>
                <li><a href="index.php" class="cambio">Home</a></li>
                <li><a href="?op=alta" class="cambio">Alta de Contacto</a></li>
                <li><a href="?op=baja" class="cambio">Baja de Contacto</a></li>
                <li><a href="?op=cambios" class="cambio">Cambio de Contactos</a></li>
                <li><a href="?op=consultas" class="cambio">Consultas de Contactos</a></li>
            </ul>
        </nav>
        <section id="principal">
            <?php include($contenido); ?>
        </section>
    </section>
</body>
</html>