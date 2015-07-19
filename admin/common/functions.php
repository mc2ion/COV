<?php
session_start();
include ("class-db.php"); $db = new db();
include ("class-ui.php"); @$ui = new ui();
include ("label.php");  $ui->setLabel($label);


function my_header($upload=""){
$out = 
<<<EOT
    <meta charset="utf-8"/>
    <title>Comité Olímpico</title>
    <link rel="stylesheet" href="./css/style.css"/>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
EOT;

if ($upload != ""){
    $out .= '<script src="./js/drop.js"></script>';
}
    return $out;
}

function top_bar(){
    return 
'<div class="top-bar">
        <div class="user-info">
            Bienvenido, '.$_COOKIE["cov-user-name"].' <a href="./manage_user_pass.php?id='.$_COOKIE["cov-user-id"].'&own=1" class="logout">Cambiar Contraseña</a> <a href="./?logout" class="logout">Salir</a>
        </div>
    </div>';
  
}

function menu($selected=""){
    $out = '<div class="menu">
        <div class="admin">Administrador</div>
        <div class="logo"><img src="../img/logo.png" alt="Logo" /></div>
        <ul>';
        if($_COOKIE["cov-user-admin"] == 1){            
            $sel  = ''; if ($selected == "usuarios") $sel = "class='selected'";
            $out .= '<li><a href="./users.php" '.$sel.'>Usuarios</a></li>';
        }
        $sel  = ''; if ($selected == "imagenes") $sel = "class='selected'";
        $out .= '<li><a href="./images.php" '.$sel.'>Imágenes</a></li>';
        $sel  = ''; if ($selected == "noticias") $sel = "class='selected'";
        $out .= '<li><a href="./news.php" '.$sel.'>Noticias</a></li>';
        $sel  = ''; if ($selected == "jugadores") $sel = "class='selected'";
        $out .= '<li><a href="./players.php" '.$sel.'>Jugadores</a></li>
        </ul>
    </div>';
    return $out;      
}

function uploadImage($path, $input){
    $format_accepted = array("png", "jpg", "jpeg");
    $uploadOk["result"] = 1;
    $target_file = $path;
    $imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
    // Verificar el formato
    if(!in_array(strtolower($imageFileType), $format_accepted)) 
    {
        $uploadOk["result"] = 0;
        $uploadOk["message"] = "Formato de la imagen no válido. Formatos aceptados: .png, .jpg y .jpeg";
    }
    // Varificar algun error
    if ($uploadOk["result"] != 0) {
        if (move_uploaded_file($_FILES[$input]["tmp_name"], $target_file)) {
            $uploadOk["result"] = 1;
        } else {
            $uploadOk["result"]  = 0;
            $uploadOk["message"] = "Error al cargar imagen";
        }
    }
    return $uploadOk;    
    
}

if (isset($_GET["logout"])){
     setcookie("cov-user-logged-in", "0", time() + 86400, "/");
     session_destroy();
     header("Location: ./index.php");
     exit();
}

