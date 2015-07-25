<?php
include ("./common/functions.php");

$errorTitulo = ""; $errorFecha = ""; $errorFuente  = ""; $errorImagen = "";  $errorDescripcion = ""; $errorAutor = "";
$out["titulo"] = "";  $out["fecha"] = ""; $out["fuente"] = ""; $out["imagen"] = ""; $out["contenido"] = "";
$out["subtitulo"] = ""; $out["autor"] = "";
$action = "crear"; $message = "";
$title  = "Agregar Noticia";

if (isset($_POST["crear"]) || isset($_POST["editar"]) ){
    $out["titulo"]      = $_POST["title"];
    $out["fecha"]       = strtotime(str_replace('/' , '.' , $_POST["date"]));
    $out["fuente"]      = $_POST["source"];
    $out["contenido"]   = $_POST["description"];
    $out["subtitulo"]   = $_POST["subtitulo"];
    $out["autor"]       = $_POST["autor"];
    if (isset($_FILES["image"]) && $_FILES["image"]["name"]  != "" ){
        $path = "gallery/news/".uniqid()."_".basename($_FILES["image"]["name"]);
        $resultUpload = uploadImage($path, "image");
        
        if ($resultUpload["result"] == "0"){
            $errorImagen = $resultUpload["message"];
        } else {
            $out["imagen"] = $path;
            
            if($_POST["path"]!=""){
                unlink($_POST["path"]);
            }
        }
    } else {
        if(isset($_POST["editar"])){
            $out["imagen"] = $_POST["path"];  
        } else {
            $errorImagen = "Por favor, cargue una imagen.";
        }
    }
    if ($out["titulo"] == "") $errorTitulo      = "Por favor, ingrese el título de la noticia.";
    if ($out["fecha"] == "")  $errorFecha       = "Por favor, ingrese la fecha de la noticia.";
    if ($out["fuente"] == "") $errorFuente      = "Por favor, ingrese la fuente de la noticia.";
    if ($out["contenido"] == "")  $errorDescripcion = "Por favor, ingrese la descripción de la noticia.";
    if ($out["autor"] == "")  $errorAutor       = "Por favor, ingrese el autor de la noticia.";
    if ($out["titulo"] &&  $out["fecha"] && $out["fuente"] && $out["contenido"] && $out["autor"] && $out["imagen"]){
        if (isset($_POST["crear"])){
            $out["creado_por"] = $_COOKIE["cov-user-id"];
            $out["fecha_creacion"] = time();
            $id = @$db->dbInsert("noticias", $out);
            if ($id>0){
                $_SESSION["message-s"] = "La noticia fue creada exitosamente.";
                header("Location: ./news.php");
                exit();
            }else{
                $message = "Ha ocurrido un error creando la noticia. Por favor intente más tarde.";
            }
            
        }else{
            $out["editado_por"] = $_COOKIE["cov-user-id"];
            $out["fecha_edicion"] = time();
            $id = @$db->dbUpdate("noticias", $out, 'id = "'.$db->clean($_GET["id"]).'"');
            if ($id>0){
                $_SESSION["message-s"] = "La noticia fue editada exitosamente.";
                header("Location: ./news.php");
                exit();
            }else{
                $message = "Ha ocurrido un error editando la noticia. Por favor intente más tarde.";
            }
            
        }
    }
}

if(isset($_POST["eliminar"])){
    unset($out);
    $out["borrado"] = 1;
    $out["borrado_por"] = $_COOKIE["cov-user-id"];
    $out["fecha_borrado"] = time();
    $id = $db->dbUpdate("noticias", $out, 'id = "'.$db->clean($_GET["id"]).'"');
    if ($id>0){
        if($_POST["path"]!=""){
            unlink($_POST["path"]);
        }
        $_SESSION["message-s"] = "La noticia fue eliminada exitosamente.";
        header("Location: ./news.php");
        exit();
    }else{
        $message = "Ha ocurrido un error eliminado la noticia. Por favor intente más tarde.";
    }
}

if (isset($_GET["id"])){
    $action = "editar";
    $id = $db->clean($_GET["id"]);
    $query = "SELECT * from noticias WHERE id = '$id'";
    $q = $db->dbQuery($query);
    $out["titulo"] = $q[1]["titulo"];
    $out["fecha"]  = date('d/m/Y', $q[1]["fecha"]);
    $out["fuente"]  = $q[1]["fuente"];
    $out["contenido"]  = $q[1]["contenido"];
    $out["subtitulo"]  = $q[1]["subtitulo"];
    $out["autor"]   = $q[1]["autor"];
    $out["imagen"]  = $q[1]["imagen"];
    $title           = "Editar Noticia";
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
        <div class="title"><?= $title?></div>
        <div class="err"><?= $message?></div>
        <div class="add-content">
            <form method="post" enctype="multipart/form-data">
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
                        <input type="text" class="datepicker" name="date" value="<?= $out["fecha"]?>" autocomplete="off"/>
                        <span class="error"><?= $errorFecha?></span>
                    </p>
                    <p><label>Autor:</label>
                        <input type="text" name="autor" value="<?= $out["autor"]?>"/>
                        <span class="error"><?= $errorAutor?></span>
                    </p>
                    <p><label>Imagen:</label>                        
                        <input type="hidden" value="<?= $out["imagen"] ?>" name="path" />
                        <input type="file" name="image" value="<?= $out["imagen"] ?>"/>
                        <span class="error"><?= $errorImagen?></span>
                    </p>
                    <p>
                        <label>Descripción:</label>
                        <textarea id="description" name="description" class="description"><?= $out["contenido"]?></textarea>
                        <span class="error"><?= $errorDescripcion?></span>
                    </p>
                    <p class="buttons"><label></label><input type="submit" name="<?= $action ?>" value="Guardar"/>                     
                    <?php if ($action == "editar") {?>
                    <input type="submit" name="eliminar" value="Eliminar"/></p>
                    <?php } ?>
                </fieldset>
            </form>
        </div>
    </div>
  </body>
</html>