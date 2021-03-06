<?php
include ("./common/functions.php");
include ("./verify_login.php");

$message = ""; $messageS = "";

$messageS =  (isset($_SESSION["message-s"])) ? $_SESSION["message-s"] : "" ;
unset($_SESSION["message-s"]);

if (isset($_GET["delete"])){
    unset($out);
    $out["borrado"] = 1;
    $out["borrado_por"] = $_COOKIE["cov-user-id"];
    $out["fecha_borrado"] = time();
    
    $id = $db->dbUpdate("imagenes", $out, 'id = "'.$db->clean($_GET["delete"]).'"');
    if ($id>0){
        if($_GET["path"]!=""){
            @unlink($_GET["path"]);
        }
        $messageS = "La imagen fue eliminada exitosamente.";
        /*header("Location: ./news.php");
        exit();*/
    }else{
        $message = "Ha ocurrido un error eliminado la imagen. Por favor intente más tarde.";
    }
}

$query      = "SELECT t1.id, t1.nombre, t1.fecha_creacion, t2.nombre as nuser, t2.apellido, t1.path from imagenes t1 left join usuarios t2 on t1.creado_por = t2.id where t1.borrado = 0";
$images     = $db->dbQuery($query);

unset($out);

foreach ($images as $k=>$v){
    $out[$k]["id"]             = $v["id"];
    $out[$k]["muestra"]        = "<img src='./{$v["path"]}' alt='{$v['nombre']}'>";
    $out[$k]["fecha_creacion"] = date('d/m/Y', $v["fecha_creacion"]);
    $out[$k]["creado_por"]     = $v["nuser"] . " ". $v["apellido"];
    $out[$k]["Acción"]         = "<a href='./images.php?delete={$v["id"]}&path={$v["path"]}'>Eliminar</a>"; 
   
    
}

?>

<!DOCTYPE html>
<html lang="en">
  <head>
     <?= my_header()?>
  </head>
  <body>
    <?= top_bar(); ?>
    <?= menu("imagenes"); ?>
    <div class="content">
        <div class="title">Imágenes <a href="./upload_images.php" class="add">Añadir nueva</a></div>
        
        <div class="err"><?= $message?></div>
        <div class="suc"><?= $messageS?></div>
        <?= @$ui->buildTable($out,1,0); ?>
    </div>
  </body>
</html>                                                                                                                                                                        