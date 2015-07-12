<?php
include ("./common/functions.php");

$errorTitulo = ""; $errorFecha = ""; $errorFuente  = ""; $errorImagen = "";  $errorDescripcion = ""; $errorAutor = "";
$out["titulo"] = "";  $out["fecha"] = ""; $out["fuente"] = ""; $out["imagen_id"] = ""; $out["contenido"] = "";
$out["subtitulo"] = ""; $out["autor"] = "";
$action = "crear";
if (isset($_POST["crear"]) || isset($_POST["editar"]) ){
    $out["titulo"]      = $_POST["title"];
    $out["fecha"]       = strtotime($_POST["date"]);
    $out["fuente"]      = $_POST["source"];
    $out["imagen_id"]   = $_POST["image"]; if ($out["imagen_id"] == "") $out["imagen_id"] = 0;
    $out["contenido"]   = $_POST["description"];
    $out["subtitulo"]   = $_POST["subtitulo"];
    $out["autor"]       = $_POST["autor"];
    
    if ($out["titulo"] == "") $errorTitulo      = "Por favor, ingrese el título de la noticia.";
    if ($out["fecha"] == "")  $errorFecha       = "Por favor, ingrese la fecha de la noticia.";
    if ($out["fuente"] == "") $errorFuente      = "Por favor, ingrese la fuente de la noticia.";
    if ($out["contenido"] == "")  $errorDescripcion = "Por favor, ingrese la descripción de la noticia.";
    if ($out["autor"] == "")  $errorAutor       = "Por favor, ingrese el autor de la noticia.";
    if ($out["titulo"] &&  $out["fecha"] && $out["fuente"] && $out["contenido"]){
        if (isset($_POST["crear"])){
            $id = @$db->dbInsert("noticias", $out);
            if ($id>0){
                $_SESSION["message-s"] = "La noticia fue creada exitosamente.";
                header("Location: ./news.php");
                exit();
            }else{
                //Mostrar mensaje error
            }
            
        }else{
            $id = @$db->dbUpdate("noticias", $out, 'id = "'.$db->clean($_GET["id"]).'"');
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

if(isset($_POST["eliminar"])){
    unset($out);
    $out["borrado"] = 1;
    $out["fecha_borrado"] = time();
    $id = $db->dbUpdate("noticias", $out, 'id = "'.$db->clean($_GET["id"]).'"');
    if ($id>0){
        $_SESSION["message-s"] = "La noticia fue eliminada exitosamente.";
        header("Location: ./news.php");
        exit();
    }else{
        //Mostrar mensaje error
    }
}

if (isset($_GET["id"])){
    $action = "editar";
    $id = $db->clean($_GET["id"]);
    $query = "SELECT * from noticias WHERE id = '$id'";
    $q = $db->dbQuery($query);
    $out["titulo"] = $q[1]["titulo"];
    $out["fecha"]  = date('d-m-Y', $q[1]["fecha"]);
    $out["fuente"]  = $q[1]["fuente"];
    $out["contenido"]  = $q[1]["contenido"];
    $out["subtitulo"]  = $q[1]["subtitulo"];
    $out["autor"]   = $q[1]["autor"];
}

?>

<!DOCTYPE html>
<html lang="es">
  <head>
    <?= my_header()?>
    <script src="./js/tinymce/tinymce.min.js"></script>
    <script>tinyMCE.init({selector:'#description',
    plugins: "code",     
    toolbar: "code",  
    menubar : false, statusbar: false});</script>
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
                    <p><label>Subtítulo:</label>
                        <textarea name="subtitulo" id="subtitulo"><?= $out["subtitulo"]?></textarea>
                    </p>
                    <p><label>Fuente:</label>
                        <input type="text" name="source" value="<?= $out["fuente"]?>"/>
                        <span class="error"><?= $errorFuente?></span>
                    </p>
                    <p><label>Fecha:</label>
                        <input type="text" name="date" value="<?= $out["fecha"]?>"/>
                        <span class="error"><?= $errorFecha?></span>
                    </p>
                    <p><label>Autor:</label>
                        <input type="text" name="autor" value="<?= $out["autor"]?>"/>
                        <span class="error"><?= $errorAutor?></span>
                    </p>
                    <p><label>Imagen:</label>
                        <input type="text" name="image"/>
                        <span class="error"><?= $errorImagen?></span>
                    </p>
                    <p>
                        <label>Descripción:</label>
                        <textarea id="description" name="description" class="description"><?= $out["contenido"]?></textarea>
                        <span class="error"><?= $errorDescripcion?></span>
                    </p>
                    <p class="buttons"><label></label><input type="submit" name="<?= $action ?>" value="Guardar"/> <input type="submit" name="eliminar" value="Eliminar"/></p>
                </fieldset>
            </form>
        </div>
    </div>
  </body>
</html>                                                                                                                                                                        