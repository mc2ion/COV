<?php
include ("./common/functions.php");

$errorTitulo = ""; $errorFecha = ""; $errorFuente  = ""; $errorImagen = "";  $errorDescripcion = "";
$out["titulo"] = "";  $out["fecha"] = ""; $out["fuente"] = ""; $out["imagen_id"] = ""; $out["contenido"] = "";
$action = "crear";
if (isset($_POST["crear"]) || isset($_POST["editar"]) ){
    $out["titulo"]      = $_POST["title"];
    $out["fecha"]       = strtotime($_POST["date"]);
    $out["fuente"]      = $_POST["source"];
    $out["imagen_id"]   = $_POST["image"]; if ($out["imagen_id"] == "") $out["imagen_id"] = 0;
    $out["contenido"]   = $_POST["description"];
    
    if ($out["titulo"] == "") $errorTitulo      = "Por favor, ingrese el título de la noticia.";
    if ($out["fecha"] == "")  $errorFecha       = "Por favor, ingrese la fecha de la noticia.";
    if ($out["fuente"] == "") $errorFuente      = "Por favor, ingrese la fuente de la noticia.";
    if ($out["contenido"] == "")  $errorDescripcion = "Por favor, ingrese la descripción de la noticia.";
    if ($out["titulo"] &&  $out["fecha"] && $out["fuente"] && $out["contenido"]){
        if (isset($_POST["crear"])){
            $id = @$db->dbInsert("cov.noticias", $out);
            if ($id>0){
                $_SESSION["message-s"] = "La noticia fue creada exitosamente.";
                header("Location: ./news.php");
                exit();
            }else{
                //Mostrar mensaje error
            }
            
        }else{
            $id = @$db->dbUpdate("cov.noticias", $out, 'id = "'.$db->clean($_GET["id"]).'"');
            if ($id>0){
                $_SESSION["message-s"] = "La noticia fue editada exitosamente.";
                header("Location: ./news.php");
                exit();
            }else{
                //Mostrar mensaje error
            }
            
        }
    }
}

if (isset($_GET["id"])){
    $action = "editar";
    $id = $db->clean($_GET["id"]);
    $query = "SELECT * from cov.noticias WHERE id = '$id'";
    $q = $db->dbQuery($query);
    $out["titulo"] = $q[1]["titulo"];
    $out["fecha"]  = date('d-m-Y', $q[1]["fecha"]);
    $out["fuente"]  = $q[1]["fuente"];
    $out["contenido"]  = $q[1]["contenido"];
}

?>

<!DOCTYPE html>
<html lang="es">
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
                    <p><label>Título:</label>
                        <input type="text" name="title" value="<?= $out["titulo"]?>"/>
                        <span class="error"><?= $errorTitulo?></span>
                    </p>
                    <p><label>Fecha:</label>
                        <input type="text" name="date" value="<?= $out["fecha"]?>"/>
                        <span class="error"><?= $errorFecha?></span>
                    </p>
                    <p><label>Fuente:</label>
                        <input type="text" name="source" value="<?= $out["fuente"]?>"/>
                        <span class="error"><?= $errorFuente?></span>
                    </p>
                    <p><label>Imagen:</label>
                        <input type="text" name="image"/>
                        <span class="error"><?= $errorImagen?></span>
                    </p>
                    <p>
                        <label>Descripción:</label>
                        <textarea name="description" class="description"><?= $out["contenido"]?></textarea>
                        <span class="error"><?= $errorDescripcion?></span>
                    </p>
                    <p><label></label><input type="submit" name="<?= $action ?>" value="Guardar"/></p>
                </fieldset>
            </form>
        </div>
    </div>
  </body>
</html>                                                                                                                                                                        