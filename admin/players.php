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
    <?= menu("jugadores"); ?>
    <div class="content">
        <div class="title">Jugadores <a href="./add_players.php" class="add">Añadir nuevo</a></div>
    </div>
  </body>
</html>                                                                                                                                                                        