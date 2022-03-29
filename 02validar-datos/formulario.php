<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Validacion de datos con PHP</title>
    <script>

        // VALIDAR DATOS GET
        function validarDatosGET(){
            let verificar = true;

            if(!document.valida_datos_get_form.nombre_txt.value){
                alert("El campo nombre es requerido");

                document.valida_datos_get_form.nombre_txt.focus();
                verificar = false;

            } else if(!document.valida_datos_get_form.password_txt.value){
                alert("El campo password es requerido");

                document.valida_datos_get_form.password_txt.focus();
                verificar = false;

            } else if(!document.valida_datos_get_form.sexo_rdo[0].checked && !document.valida_datos_get_form.sexo_rdo[1].checked){
                alert("El campo sexo es requerido");

                document.valida_datos_get_form.sexo_rdo[0].focus();
                verificar = false;
            }
            
            if(verificar){
                document.valida_datos_get_form.submit();
            }

        }
        
        window.onload = function(){
            document.getElementById("enviar-get").onclick = validarDatosGET;
        }

        //VALIDAR DATOS POST
        function validarDatosPOST(){
            let verificar = true;

            if(!document.valida_datos_post_form.nombre_txt.value){
                alert("El campo nombre es requerido");

                document.valida_datos_post_form.nombre_txt.focus();
                verificar = false;

            } else if(!document.valida_datos_post_form.password_txt.value){
                alert("El campo password es requerido");

                document.valida_datos_post_form.password_txt.focus();
                verificar = false;

            } else if(!document.valida_datos_post_form.sexo_rdo[0].checked && !document.valida_datos_post_form.sexo_rdo[1].checked){
                alert("El campo sexo es requerido");

                document.valida_datos_post_form.sexo_rdo[0].focus();
                verificar = false;
            }
            
            if(verificar){
                document.valida_datos_post_form.submit();
            }

        }
        
        window.onload = function(){
            document.getElementById("enviar-get").onclick = validarDatosGET;
            document.getElementById("enviar-post").onclick = validarDatosPOST;
        }
    </script>
</head>
<body>
    <!-- ERROR EN DATOS PHP -->
    <?php
    error_reporting(E_ALL ^ E_NOTICE ^ E_WARNING);

    if($_GET["error"]==="si"){
        echo "<span style=\"color:#F00; font-size:2em;\">Verifica tus Datos</span>";
    }
    ?>
    <!-- FORMULARIO GET -->
    <hgroup><h1>Formulario de datos GET</h1></hgroup>
    <form action="validar-datos.php" name="valida_datos_get_form" method="get" enctype="application-/x-www-form-urlencoded">
        Ingresa tu Nombre:
        <input type="text" name="nombre_txt">
        <br/><br/>
        Ingresa tu Password:
        <input type="password" name="password_txt">
        <br/><br/>
        <input type="radio" name="sexo_rdo" value="M">
        Masculino&nbsp;
        <br/><br/>
        <input type="radio" name="sexo_rdo" value="F">
        Femenino&nbsp;
        <br/><br/>
        <input type="hidden" name="enviar_hdn" value="get">
        <input type="button" id="enviar-get" name="enviar_btn" value="Enviar x GET">
    </form>

    <!-- FORMULARIO POST -->
    <hgroup><h1>Formulario de datos POST</h1></hgroup>
    <form action="validar-datos.php" name="valida_datos_post_form" method="post" enctype="application-/x-www-form-urlencoded">
        Ingresa tu Nombre:
        <input type="text" name="nombre_txt">
        <br/><br/>
        Ingresa tu Password:
        <input type="password" name="password_txt">
        <br/><br/>
        <input type="radio" name="sexo_rdo" value="M">
        Masculino&nbsp;
        <br/><br/>
        <input type="radio" name="sexo_rdo" value="F">
        Femenino&nbsp;
        <br/><br/>
        <input type="hidden" name="enviar_hdn" value="post">
        <input type="button" id="enviar-post" name="enviar_btn" value="Enviar x POST">
    </form>
</body>
</html>