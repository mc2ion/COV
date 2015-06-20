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
    <?= menu("jugadores"); ?>
    <div class="content">
        <div class="title">Jugadores <a href="./upload_players.php" class="add">Añadir nuevo</a></div>
    </div>
  </body>
</html>