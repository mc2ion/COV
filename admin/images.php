<?php
include ("./common/functions.php");
include ("./common/class-db.php"); $db = new db();
include ("./common/class-ui.php"); @$ui = new ui();

$query      = "SELECT t1.id, t1.nombre, t1.fecha_creacion, t2.nombre as nuser, t2.apellido, t1.path from cov.images t1 left join cov.users t2 on t1.creado_por = t2.id";
$images     = $db->dbQuery($query);
foreach ($images as $k=>$v){
    $out[$k]["ID"]             = $v["id"];
    $out[$k]["Muestra"]        = "<img src='./{$v["path"]}' alt='{$v['nombre']}'>";
    $out[$k]["Fecha Creacion"] = date('d-m-Y', $v["fecha_creacion"]);
    $out[$k]["Creado Por"]     = $v["nuser"] . " ". $v["apellido"];
    $out[$k]["Acción"]         = "<a href='./common/actions.php?delete={$v["id"]}'>Borrar</a>"; 
   
    
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
        <?= @$ui->buildTable($out,1,0); ?>
    </div>
  </body>
</html>                                                                                                                                                                        