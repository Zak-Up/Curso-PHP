<?php
if($_POST["usuario_txt"]=="bextlan" && $_POST["password_txt"]=="12345"){
    //INICIO SESION
    session_start();

    //DECLARO MIS VARIABLES DE SESION
    $_SESSION["autentificado"] = true;
    $_SESSION["usuario"] = $_POST["usuario_txt"];

    header("Location: archivo-protegido.php");
} else{
    header("Location: index.php?error=si");
}
?>