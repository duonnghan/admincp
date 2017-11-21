<?php
/***************************************
Định nghĩa một hằng số bảo vệ project
***************************************/
session_start();
define("IN_SITE", true);

/***************************************
Lấy module và action trên URL
***************************************/
$module = $_GET['m']??'';
$action = $_GET['a']??'';

if(!isset($_SESSION['admin_id'])){
     header("location:modules/common/login.php");
}else{
    header("location:modules/common/main.php?a=".$action);
}
    
   

?>
