<?php
include ("./common/functions.php");
include ("./verify_login.php");


if (isset($_POST) && isset($_POST["upload"])){
    extract($_POST);
    $error=array();
    $extension=array("jpeg","jpg","png","gif");
    foreach($_FILES["files"]["tmp_name"] as $key=>$tmp_name)
    {
        $file_name  = $_FILES["files"]["name"][$key];
        $file_tmp   = $_FILES["files"]["tmp_name"][$key];
        $ext        = pathinfo($file_name,PATHINFO_EXTENSION);
        if(in_array(strtolower($ext),$extension))
        {
            if(!file_exists("./gallery/".uniqid().$file_name))
            {
                move_uploaded_file($file_tmp=$_FILES["files"]["tmp_name"][$key],"gallery/".$file_name);
                $out["nombre"]          = $file_name;
                $out["ext"]             = $ext;
                $out["path"]            = "gallery/".$file_name;
                $out["fecha_creacion"]  = time();
                $out["creado_por"]      = $_COOKIE["cov-user-id"];
                $id = @$db->dbInsert("imagenes", $out);
                
                if ($id>0){
                    $_SESSION["message-s"] = "La imagen fue cargada exitosamente.";
                    header("Location: ./images.php");
                    exit();
                }else{
                    $message = "Ha ocurrido un error cargando la imagen. Por favor intente más tarde.";
                }
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
            <form method="post" enctype="multipart/form-data" id="my-awesome-dropzone">
                <fieldset>
                    <p><label>Imagen:</label><input type="file" name="files[]" multiple /></p>
                    <p class="buttons">
                        <input type="submit" name="upload" value="Guardar"/>
                        <a href="./images.php" class="back">Volver</a>
                    </p>
                </fieldset>
            </form>
        </div>
    </div>
  </body>
</html>