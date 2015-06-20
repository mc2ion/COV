<?php
include ("./common/functions.php");
include ("./common/class-db.php"); $db = new db();


if (isset($_POST) && isset($_POST["upload"])){
    
    extract($_POST);
    $error=array();
    $extension=array("jpeg","jpg","png","gif");
    foreach($_FILES["files"]["tmp_name"] as $key=>$tmp_name)
    {
        $file_name  = $_FILES["files"]["name"][$key];
        $file_tmp   = $_FILES["files"]["tmp_name"][$key];
        $ext        = pathinfo($file_name,PATHINFO_EXTENSION);
        if(in_array($ext,$extension))
        {
            if(!file_exists("./gallery/".$file_name))
            {
                move_uploaded_file($file_tmp=$_FILES["files"]["tmp_name"][$key],"gallery/".$file_name);
                $out["nombre"]          = $file_name;
                $out["ext"]             = $ext;
                $out["path"]            = "gallery/".$file_name;
                $out["fecha_creacion"]  = time();
                $out["creado_por"]      = "1";
                @$db->dbInsert("images", $out);
            }
            else
            {
                $filename=basename($file_name,$ext);
                $newFileName=$filename.time().".".$ext;
                move_uploaded_file($file_tmp=$_FILES["files"]["tmp_name"][$key],"gallery/".$newFileName);
            }
        }
        else
        {
            array_push($error,"$file_name, ");
        }
    }
}

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <?= my_header("1")?>
  </head>
  <body>
    <?= top_bar(); ?>
    <?= menu("imagenes"); ?>
    <div class="content">
        <div class="title">Cargar Imágenes</div>
        <div class="add-content">
            <form method="post" enctype="multipart/form-data" class="dropzone" id="my-awesome-dropzone">
                <fieldset>
                    <p><label>Imagen:</label><input type="file" name="files[]" multiple /></p>
                    <p><label></label><input type="submit" name="upload" value="Cargar"/></p>
                </fieldset>
            </form>
        </div>
        <div class="add-content center">
            <a href="./images.php">Volver a listado</a>
        </div>
    </div>
  </body>
</html>