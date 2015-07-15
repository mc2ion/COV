<?php
include ("./common/functions.php");

$errorNombre = ""; $errorApellido = ""; $errorUsuario = ""; $errorCorreo = ""; $errorContrasena = ""; $errorContrasena2 = ""; $errorTipo = "";
$out["nombre"] = "";  $out["apellido"] = "";  $out["usuario"] = "";  $out["correo"] = ""; $out["contrasena"] = ""; $out["admin"] = "";
$action = "crear"; $message = "";
$title           = "Agregar Usuario";


if (isset($_POST["crear"]) || isset($_POST["editar"]) ){
    $out["nombre"]      = $_POST["firstname"];
    $out["apellido"]    = $_POST["lastname"];
    $out["usuario"]     = $_POST["username"];
    $out["correo"]      = $_POST["email"];
    $out["contrasena"]  = md5($_POST["contrasena"]);
    $rContrasena        = md5($_POST["contrasena2"]);
    $out["admin"]       = $_POST["type"];
    
    if ($out["nombre"] == "") $errorNombre      = "Por favor, ingrese el nombre del usuario.";
    if ($out["apellido"] == "")  $errorApellido       = "Por favor, ingrese el apellido del usuario.";
    if ($out["usuario"] == "") $errorUsuario      = "Por favor, ingrese el usuario.";
    if ($out["correo"] == "")  $errorCorreo = "Por favor, ingrese el correo del usuario.";
    if ($out["contrasena"] == "")  $errorContrasena       = "Por favor, ingrese una contraseña.";
    if ($rContrasena == "")  $errorContrasena2       = "Por favor, repita su contraseña.";
    if ($rContrasena != $out["contrasena"])  $errorContrasena       = "Sus contraseñas no coinciden.";
    
    if ($out["nombre"] &&  $out["apellido"] && $out["usuario"] && $out["correo"]){
        if (isset($_POST["crear"])){
            if ($out["contrasena"]){
                $id = @$db->dbInsert("usuarios", $out);
                if ($id>0){
                    $_SESSION["message-s"] = "El usuario fue creado exitosamente.";
                    header("Location: ./users.php");
                    exit();
                }else{
                    $message = "Ha ocurrido un error creando el usuario. Por favor intente más tarde.";
                }
            }
        }else{
            $id = @$db->dbUpdate("usuarios", $out, 'id = "'.$db->clean($_GET["id"]).'"');
            if ($id>0){
                $_SESSION["message-s"] = "El usuario fue editado exitosamente.";
                header("Location: ./users.php");
                exit();
            }else{
                $message = "Ha ocurrido un error editando el usuario. Por favor intente más tarde.";
            }
            
        }
    }
}

if(isset($_POST["eliminar"])){
    unset($out);
    $out["borrado"] = 1;
    $out["borrado_por"] = $_COOKIE["cov-user-id"];
    $out["fecha_borrado"] = time();
    $id = $db->dbUpdate("noticias", $out, 'id = "'.$db->clean($_GET["id"]).'"');
    if ($id>0){
        if($_POST["path"]!=""){
            unlink($_POST["path"]);
        }
        $_SESSION["message-s"] = "La noticia fue eliminada exitosamente.";
        header("Location: ./news.php");
        exit();
    }else{
        $message = "Ha ocurrido un error eliminado la noticia. Por favor intente más tarde.";
    }
}

if (isset($_GET["id"])){
    $action = "editar";
    $id = $db->clean($_GET["id"]);
    $query = "SELECT * from usuarios WHERE id = '$id'";
    $q = $db->dbQuery($query);
    $out["nombre"]   = $q[1]["nombre"];
    $out["apellido"] = $q[1]["apellido"];
    $out["usuario"]  = $q[1]["usuario"];
    $out["correo"]   = $q[1]["correo"];
    $out["admin"]    = $q[1]["admin"];
    $title           = "Editar Usuario";
    
}

if (isset($_SESSION["message-s"])){
    $messageS = $_SESSION["message-s"];
    unset($_SESSION["message-s"]);
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
      
        <div class="err"><?= $message?></div>
        <div class="suc"><?= $messageS?></div>
        <div class="add-content">
           
           <?php if ($action == "editar"){?>
                <div class="pass">
                <a href="./manage_user_pass.php?id=<?=$_GET["id"]?>" class="cpass">Cambiar contraseña</a>
                </div>
            <?php }?>
            <form method="post">
                <fieldset>
                    <p><label>Nombre:</label>
                        <input type="text" name="firstname" value="<?= $out["nombre"]?>"/>
                        <span class="error"><?= $errorNombre?></span>
                    </p>
                    <p><label>Apellido:</label>
                        <input type="text" name="lastname" value="<?= $out["apellido"]?>"/>
                        <span class="error"><?= $errorApellido?></span>
                    </p>
                    <p><label>Usuario:</label>
                        <input type="text" name="username" value="<?= $out["usuario"]?>"/>
                        <span class="error"><?= $errorUsuario?></span>
                    </p>
                    <p><label>Correo Electrónico:</label>
                        <input type="email" name="email" value="<?= $out["correo"]?>"/>
                        <span class="error"><?= $errorCorreo?></span>
                    </p>
                    <?php if ($action == "crear"){?>
                    <p><label>Contraseña:</label>
                        <input type="password" name="contrasena" value=""/>
                        <span class="error"><?= $errorContrasena?></span>
                    </p>
                    <p><label>Repetir Contraseña:</label>
                        <input type="password" name="contrasena2" value=""/>
                        <span class="error"><?= $errorContrasena2?></span>
                    </p>
                    <?php }?>
                    <p><label>Tipo:</label>
                        <select name="type">
                            <option value="1" <?=($out["admin"] == "1") ? "selected":""?>>Administrador</option>
                            <option value="0" <?=($out["admin"] == "0") ? "selected":""?>>Usuario</option>
                        </select>
                        <span class="error"><?= $errorTipo?></span>
                    </p>
                    
                    <p class="buttons">
                        <input type="submit" name="<?= $action ?>" value="Guardar"/> 
                        <input type="submit" name="eliminar" value="Eliminar"/>
                        <a href="./users.php" class="back">Volver</a>
                    </p>
                </fieldset>
            </form>
        </div>
    </div>
  </body>
</html>