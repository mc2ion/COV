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
<<<EOT
<div class="top-bar">
        <div class="user-info">
            Bienvenido, Marión <a href="./?logout" class="logout">(Salir)</a>
        </div>
    </div>
EOT;
  
}

function menu($selected=""){
    $out = '<div class="menu">
        <div class="admin">Administrador</div>
        <div class="logo"><img src="../img/logo.png" alt="Logo" /></div>
        <ul>';
        $sel  = ''; if ($selected == "imagenes") $sel = "class='selected'";
        $out .= '<li><a href="./images.php" '.$sel.'>Imágenes</a></li>';
        $sel  = ''; if ($selected == "videos") $sel = "class='selected'";
        $out .= '<li><a href="./videos.php" '.$sel.'>Vídeos</a></li>';
        $sel  = ''; if ($selected == "noticias") $sel = "class='selected'";
        $out .= '<li><a href="./news.php" '.$sel.'>Noticias</a></li>';
        $sel  = ''; if ($selected == "jugadores") $sel = "class='selected'";
        $out .= '<li><a href="./players.php" '.$sel.'>Jugadores</a></li>
        </ul>
    </div>';
    return $out;      
}

if (isset($_GET["logout"])){
     setcookie("cov-user-logged-in", "0", time() + 86400, "/");
     session_destroy();
     header("Location: ./index.php");
     exit();
}

