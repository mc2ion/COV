<?php
include ("./common/functions.php");

$focus1 = ""; $focus2 = "";$msg = "";

$user       = "";
$password   = "";
if (isset($_POST) && isset($_POST["submit"])){
    $user       = $db->clean($_POST["user"]);
    $password   = $db->clean($_POST["password"]);
    
    if (!$user || !$password){
        if ($user=="") {$msg = "Por favor, indique su usuario." ; $focus1 = "autofocus"; $focus2 = ""; }
        else if ($password == ""){ $msg = "Por favor, indique su contraseña."; $focus1 = ""; $focus2 = "autofocus";}
    }else{
        $query = "SELECT * from usuarios WHERE (correo = '$user' OR usuario = '$user') AND contrasena = '$password' ";
        $q = $db->dbQuery($query);
        if ($q){
            setcookie("cov-user-logged-in", "1", time() + 86400, "/");
            header("Location: ./index.php");
            exit();
        }else{
            $msg        = "La combinación usuario / contraseña no es correcta."; $focus1 = ""; $focus2 = "autofocus";
            $password   = "";
        }
     } 
}
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8"/>
    <title>Comité Olímpico</title>
    <link rel="stylesheet" href="./css/style.css"/>
  </head>
  <body>
    <div class="content-login">
        <div class="header">
          <div class="logo-top">
            <img src="../img/logo.png" alt="logo"/>
          </div>
      </div>
     <form class="login" method="POST">
        <div class="error"><?= $msg ?></div>
        <fieldset>
            <div>
                <label>Correo electrónico:</label>
                <input type="text" name="user" value="<?= $user ?>" <?= $focus1?>/>
            </div>
            <div>
                <label>Contraseña:</label>
                <input type="password" name="password"  value="<?= $password ?>"  <?= $focus2?>/>
            </div>
            <div style="text-align: right;">
                <a href="" class="forgot">Olvidé mi contraseña</a>
                <input type="submit" name="submit" value="Entrar"/>
            </div>
        </fieldset>
     </form>
    </div>
  </body>
</html>