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
        <div class="title">Agregar Jugadores</div>
        <div class="add-content">
            <form method="post">
                <fieldset>
                    <p><label>Nombre:</label><input type="text" name="name"/></p>
                    <p><label>Imagen:</label><input type="file" name="files[]"/></p>
                    <p><label></label><input type="submit" value="Cargar"/></p>
                </fieldset>
            </form>
        </div>
    </div>
  </body>
</html>