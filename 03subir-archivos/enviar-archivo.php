<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Subir archivos a servidor con PHP</title>
</head>
<body>
    <form name="enviar_archivo_frm" method="post" action="subir-archivo.php" enctype="multipart/form-data">
        <input type="file" name="archivo_fls">
        <input type="submit" name="subir_btn" value="Subir Archivo">
    </form>
</body>
</html>