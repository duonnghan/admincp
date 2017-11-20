
<?php
define("IN_SITE", true);
session_start();
include_once("../../libs/functions.php");
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>Đăng nhập</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
    <link rel="stylesheet" href="../../css/stylelogin.css">

</head>

<body>
    <div class="login">
    <h1>Đăng nhập</h1>
    <form method="post" action="login.php">
        <input type="text" name="txtUserName" placeholder="Username" required="required" />
        <input type="password" name="txtPassword" placeholder="Password" required="required" />
        <button type="submit" name="btnLogin" class="btn btn-primary btn-block btn-large" value="login">Đăng nhập</button>
    </form>
    </div>


    <?php

    if(isset($_POST["btnLogin"]) && $_POST["btnLogin"]=="login")
    {	
        doLogin();
    }
?>

</body>

</html>

<?php ob_flush(); ?>
