<?php
include ("./admin/common/class-db.php"); $db = new db();

function getLastNews(){
    global $db;
    $query      = "SELECT t1.id, t1.titulo, t1.fecha, t1.fuente, t1.contenido, t1.subtitulo, t1.autor, t2.path from noticias t1 left join imagenes t2 on t1.imagen_id = t2.id where t1.borrado = 0 order by t1.id desc limit 4";
    $new        = $db->dbQuery($query);
    
    return $new;
}

function getNewsDetail($id){
    global $db;
    $query      = "SELECT t1.id, t1.titulo, t1.fecha, t1.fuente, t1.contenido, t1.subtitulo, t1.autor, t2.path from noticias t1 left join imagenes t2 on t1.imagen_id = t2.id where t1.id = ".$id;
    $new        = $db->dbQuery($query);
    if($new) return $new[1];
    return $new;
}

function getMonthName($month){
    $months = array("01"=>"Enero", "02"=>"Febrero", "03"=>"Marzo", "04"=>"Abril", "05"=>"Mayo", "06"=>"Junio", "07"=>"Julio", "08"=>"Agosto", "09"=>"Septiembre", "10"=>"Octubre", "11"=>"Noviembre", "12"=>"Diciembre");
    return $months[$month];
}

?>