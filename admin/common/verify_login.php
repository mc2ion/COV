<?php
if (!isset($_COOKIE["cov-user-logged-in"]) || $_COOKIE["cov-user-logged-in"] == "0" ){
    header("Location: ../admin/login.php");
    exit();
}


