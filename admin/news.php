<?php
include ("./common/functions.php");

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
        <div class="title">Noticias <a href="./add_news.php" class="add">Añadir nueva</a></div>
    </div>
  </body>
</html>                                                                                                                                                                        