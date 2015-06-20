<?php
include ("./common/functions.php");

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <?= my_header()?>
    <script src="./js/tinymce/tinymce.min.js"></script>
    <script>tinyMCE.init({selector:'textarea',  
    toolbar: "bold italic underline bullist numlist",  
    menubar : false, statusbar: false, fontsize_formats: "14pt",
    onchange_callback: function(editor) {
			tinyMCE.triggerSave();
			$("#" + editor.id).valid();
    }});</script>
  </head>
  <body>
    <?= top_bar(); ?>
    <?= menu("noticias"); ?>
    <div class="content">
        <div class="title">Agregar Noticias</div>
        <div class="add-content">
            <form method="post">
                <fieldset>
                    <p><label>Título:</label><input type="text" name="title"/></p>
                    <p><label>Descripción:</label>
                    <textarea name="description" class="description">
                    </textarea>
                    </p>
                    <p><label></label><input type="submit" value="Cargar"/></p>
                </fieldset>
            </form>
        </div>
    </div>
  </body>
</html>                                                                                                                                                                        