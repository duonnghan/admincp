<?php
/*******************
Gán session (SET)
********************/
function session_set($key, $value){
    $_SESSI0N['$key'] = $value;
}

/*******************
Lấy session (GET)
********************/
function session_get($key){
    return $_SESSION['$key']?? false;
    //tuong duong
    //return (isset($_SESSION[$key])) ? $_SESSION[$key] : false;
}

/*******************
Xóa session (DELETE)
********************/
function session_delete($key){
    if(isset($_SESSI0N['$key']))
        unset($_SESSI0N['$key']);
}

?>