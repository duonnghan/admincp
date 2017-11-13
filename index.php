<?php
/***************************************
Định nghĩa một hằng số bảo vệ project
***************************************/

define("IN_SITE", true);

/***************************************
Lấy module và action trên URL
***************************************/
$module = $_GET['m']??'';
$action = $_GET['a']??'';

/***************************************
Trường hợp người dùng không truyền module và action
thì ta lấy module mặc định là common
và action mặc định là login
***************************************/
if(empty($module) || empty($action)){
    $module='common';
    $action='login';
}

/***************************************
Tạo đường dẫn cho module và action
***************************************/
$path = 'modules/'.$module.'/'.$action.'.php';

if(file_exists($path)){
    include_once("./libs/functions.php");
    checkUser();
    redirect('admincp/'.$path);
}else{
    include_once("./modules/common/404.php");
} 

?>