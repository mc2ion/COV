<?php
include ("./common/functions.php");

$errorNombre = ""; $errorApellido = ""; $errorUsuario = ""; $errorCorreo = ""; $errorContrasena = ""; $errorContrasena2 = ""; $errorTipo = "";
$out["contrasena"] = ""; 
$message = "";


if (isset($_POST["editar"]) ){
    $out["contrasena"]  = md5($_POST["contrasena"]);
    $rContrasena        = md5($_POST["contrasena2"]);
    if ($out["contrasena"] == "")  $errorContrasena                 = "Por favor, ingrese una contraseña.";
    if ($rContrasena == "")  $errorContrasena2                      = "Por favor, repita su contraseña.";
    if ($rContrasena != $out["contrasena"])  $errorContrasena       = "Sus contraseñas no coinciden.";
    
    if ($out["contrasena"]){
        $id = @$db->dbUpdate("usuarios", $out, 'id = "'.$db->clean($_GET["id"]).'"');
        if ($id>0){
            $_SESSION["message-s"] = "La contreseña fue editada exitosamente.";
            header("Location: ./manage_user.php?id={$_GET["id"]}");
            exit();
        }else{
            $message = "Ha ocurrido un error editando la contraseña. Por favor intente más tarde.";
        }
    }
}

if (isset($_GET["id"])){
    $title           = "Cambiar contraseña";    
}

?>

<!DOCTYPE html>
<html lang="es">
  <head>
    <?= my_header()?>
    <script src="./js/tinymce/tinymce.min.js"></script>
    <script>tinyMCE.init({selector:'#description',
    plugins: "code",     
    toolbar: "code",  
    menubar : false, statusbar: false});</script>
  </head>
  <body>
    <?= top_bar(); ?>
    <?= menu("usuarios"); ?>
    <div class="content">
        <div class="title"><?= $title?></div>
        <div class="add-content">
           <form method="post">
                <fieldset>
                    <p><label>Contraseña:</label>
                        <input type="password" name="contrasena" value=""/>
                        <span class="error"><?= $errorContrasena?></span>
                    </p>
                    <p><label>Repetir Contraseña:</label>
                        <input type="password" name="contrasena2" value=""/>
                        <span class="error"><?= $errorContrasena2?></span>
                    </p>
                    <p class="buttons">
                        <input type="submit" name="editar" value="Guardar"/> 
                        <a href="./manage_user.php?id=<?=$_GET["id"]?>" class="back">Volver</a>
                    </p>
                </fieldset>
            </form>
        </div>
    </div>
  </body>
</html>