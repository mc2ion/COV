<?php
include ("./common/functions.php");
include ("./verify_login.php");

?>

<!DOCTYPE html>
<html lang="en">
  <head>
     <?= my_header()?>
  </head>
  <body>
    <?= top_bar(); ?>
    <?= menu("videos"); ?>
    <div class="content">
        <div class="title">Vídeos <a href="./upload_videos.php" class="add">Añadir nuevo</a></div>
    </div>
  </body>
</html>                                                                                                                                                                        