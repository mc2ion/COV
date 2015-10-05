<?php

/**
 * @author lolkittens
 * @copyright 2015
 */

if(!isset($_COOKIE["cov-user-logged-in"]) || $_COOKIE["cov-user-logged-in"]==0){
    header("Location: ./login.php");
    exit();
}

?>