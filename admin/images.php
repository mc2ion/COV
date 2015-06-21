<?php
include ("./common/functions.php");

$query      = "SELECT t1.id, t1.nombre, t1.fecha_creacion, t2.nombre as nuser, t2.apellido, t1.path from cov.imagenes t1 left join cov.usuarios t2 on t1.creado_por = t2.id";
$images     = $db->dbQuery($query);
foreach ($images as $k=>$v){
    $out[$k]["id"]             = $v["id"];
    $out[$k]["muestra"]        = "<img src='./{$v["path"]}' alt='{$v['nombre']}'>";
    $out[$k]["fecha_creacion"] = date('d-m-Y', $v["fecha_creacion"]);
    $out[$k]["creado_por"]     = $v["nuser"] . " ". $v["apellido"];
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