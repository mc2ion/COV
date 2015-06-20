<?php include_once ("class-db.php"); $db = new db();

if (isset($_GET["delete-image"])){
    #$id = $_GET["delete"];
    #$query = "DELETE from cov.images where id = '{$id}'";
    #$db->cQuery($query);
    echo "a";
    header("Location: ../images.php");
}
