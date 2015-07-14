<?php
include ("./common/functions.php");

$query      = "SELECT u.id, u.nombre, u.apellido, u.usuario, u.correo, u.admin from usuarios u where u.borrado = 0";
$new        = $db->dbQuery($query);
foreach ($new as $k=>$v){
    $out[$k]["id"]             = $v["id"];
    $out[$k]["nombre"]         = $v["nombre"];
    $out[$k]["apellido"]       = $v["apellido"];
    $out[$k]["usuario"]       = $v["usuario"];
    $out[$k]["correo"]       = $v["correo"];
    if($v["admin"] == 1){$out[$k]["admin"] = "Si";} else {$out[$k]["admin"] = "No";};
    $out[$k]["accion"]         = "<a href='./manage_user.php?id={$v["id"]}'>Editar</a>"; 
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
    <?= menu("usuarios"); ?>
    <div class="content">
        <div class="title">Usuarios <a href="./manage_user.php" class="add">Añadir nuevo</a></div>
        <div class="suc"><?= $message?></div>
        <?= @$ui->buildTable($out,1,0); ?>
    </div>
  </body>
</html>