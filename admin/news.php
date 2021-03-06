<?php
include ("./common/functions.php");
include ("./verify_login.php");

$query      = "SELECT t1.id, t1.titulo, t1.fecha, t1.fuente, t1.contenido, t1.subtitulo, t1.autor, t1.imagen as path from noticias t1 where t1.borrado = 0";
$new        = $db->dbQuery($query);
foreach ($new as $k=>$v){
    $out[$k]["id"]             = $v["id"];
    $out[$k]["titulo"]         = $v["titulo"];
    $out[$k]["fecha"]          = date('d/m/Y', $v["fecha"]);
    if ($v["path"] != "")      $out[$k]["imagen"]         = "<img src='./{$v["path"]}' alt='{$v["titulo"]}'/>";
    else { $out[$k]["imagen"]  = "N/A";}
    $out[$k]["subtitulo"]      = $v["subtitulo"];
    $out[$k]["accion"]         = "<a href='./manage_new.php?id={$v["id"]}'>Editar</a>"; 
}

$message =  (isset($_SESSION["message-s"])) ? $_SESSION["message-s"] : "" ;
unset($_SESSION["message-s"]);


?>

<!DOCTYPE html>
<html lang="en">
  <head>
     <?= my_header()?>
  </head>
  <body>
    <?= top_bar(); ?>
    <?= menu("noticias"); ?>
    <div class="content">
        <div class="title">Noticias <a href="./manage_new.php" class="add">Añadir nueva</a></div>
        <div class="suc"><?= $message?></div>
        <?= @$ui->buildTable($out,1,0); ?>
    </div>
  </body>
</html>                                                                                                                                                                        