<?php

include_once("database.php");
include_once("config.php");
include_once("session.php");
/*
	Kiểm tra nếu phiên user id có hay không. Nếu không chuyển
	tới trang login. Nếu có và tìm thấy
	$_GET['logout'] trong truy vấn thì đăng xuất thành viên
*/
function checkUser()
{
	// Nếu phiên id không thiết lập, chuyển tới trang login
	if (!isset($_SESSION['admin_id'])) {
		header('Location: login.php');
		exit();
	}

	// thành viên này muốn đăng xuất
	if (isset($_GET['logout'])) {
		doLogout();
	}
}

/************************
Ham chuyen trang
*************************/
function redirect($link){
    header("Location:{$link}");
    exit();
}

/************************
Ham dang nhap
*************************/
function doLogin()
{
	// nếu tìm thấy lỗi, lưu lỗi vào biến sau
	$errorMessage = '';

	$userName = $_POST['txtUserName'];
	$password = $_POST['txtPassword'];

	// trước tiên, chắc chắn là username & password có giá trị
	if ($userName == '') {
		$errorMessage = 'Vui lòng nhập username';
	} else if ($password == '') {
		$errorMessage = 'Vui lòng nhập mật khẩu';
	} else {
		// kiểm tra database và thấy nếu username và password đều có
		$sql="select username from admin where username='" . $userName . "' And password='".$password. "'";
		$result = dbQuery($sql);

		if (dbNumRows($result) == 1) {
			$row = dbFetchAssoc($result);
			$_SESSION['admin_id'] = $row['username'];
            echo "Dang nhap thanh cong";

			// ghi lại thời gian mà thành viên đó đăng nhập lần cuối
			$sql = "UPDATE admin
			        SET lastlogin = NOW()
					WHERE username = '{$row['username']}'";
			dbQuery($sql);
                  
            redirect("main.php");
		} else {
			$errorMessage = 'Sai tên đăng nhập hoặc mật khẩu';
			echo "<script>alert('Sai tên đăng nhập hoặc mật khẩu, vui lòng nhập lại.')</script>";
		}

	}

	return $errorMessage;
}

/*
	Thành viên đăng xuất
*/
function doLogout()
{
	if (isset($_SESSION['admin_id'])) {
		unset($_SESSION['admin_id']);
		session_unregister('admin_id');
	}

	redirect('../modules/common/login.php');
	exit();
}


/*************************************************
	Tạo tùy chỉnh combo box chứa các danh mục ta có.
	Nếu $catId được thiết lập sau đó danh mục đó được chọn
****************************************************/
function buildCategoryOptions($catId = 0)
{
	$sql = "SELECT id, categoryname
			FROM category
			ORDER BY id";
	$result = dbQuery($sql) or die('Cannot get Product. ' . mysql_error());

	$categories = array();
	while($row = dbFetchArray($result)) {
		list($id, $name) = $row;

//		if ($parentId == 0) {
//			// tạo mảng mới cho mỗi cấp danh mục
//			$categories[$id] = array('name' => $name, 'children' => array());
//		} else {
//			// Các danh mục con được đưa vào mảng của danh mục cha
//			$categories[$parentId]['children'][] = array('id' => $id, 'name' => $name);
//		}
        $categories[$id] = $name;
	}

	// Tạo tùy chỉnh combo box	$list = '';
	foreach ($categories as $key => $value) {
		$name     = $value['name'];
		$children = $value['children'];

		$list .= "<optgroup label=\"$name\">";

		foreach ($children as $child) {
			$list .= "<option value=\"{$child['id']}\"";
			if ($child['id'] == $catId) {
				$list.= " selected";
			}

			$list .= ">{$child['name']}</option>\r\n";
		}

		$list .= "</optgroup>";
	}

	return $list;
}



/*************************************************
	Tạo thumbnail của $srcFile và lưu vào $destFile.
	Thumbnail có kích thước $width pixel.
**************************************************/
function createThumbnail($srcFile, $destFile, $width, $quality = 75)
{
	$thumbnail = '';

	if (file_exists($srcFile)  && isset($destFile))
	{
		$size        = getimagesize($srcFile);
		$w           = number_format($width, 0, ',', '');
		$h           = number_format(($size[1] / $size[0]) * $width, 0, ',', '');

		$thumbnail =  copyImage($srcFile, $destFile, $w, $h, $quality);
	}

	// trả về tên file thumbnail khi thành công hoặc để trắng nếu không được
	return basename($thumbnail);
}

/*
	Cop ảnh tới file đích. Cỡ ảnh được thiết lập $w X $h pixel
*/
function copyImage($srcFile, $destFile, $w, $h, $quality = 75)
{
    $tmpSrc     = pathinfo(strtolower($srcFile));
    $tmpDest    = pathinfo(strtolower($destFile));
    $size       = getimagesize($srcFile);

    if ($tmpDest['extension'] == "gif" || $tmpDest['extension'] == "jpg")
    {
       $destFile  = substr_replace($destFile, 'jpg', -3);
       $dest      = imagecreatetruecolor($w, $h);
       imageantialias($dest, TRUE);
    } elseif ($tmpDest['extension'] == "png") {
       $dest = imagecreatetruecolor($w, $h);
       imageantialias($dest, TRUE);
    } else {
      return false;
    }

    switch($size[2])
    {
       case 1:       //GIF
           $src = imagecreatefromgif($srcFile);
           break;
       case 2:       //JPEG
           $src = imagecreatefromjpeg($srcFile);
           break;
       case 3:       //PNG
           $src = imagecreatefrompng($srcFile);
           break;
       default:
           return false;
           break;
    }

    imagecopyresampled($dest, $src, 0, 0, 0, 0, $w, $h, $size[0], $size[1]);

    switch($size[2])
    {
       case 1:
       case 2:
           imagejpeg($dest,$destFile, $quality);
           break;
       case 3:
           imagepng($dest,$destFile);
    }
    return $destFile;

}

/*********************************************************
	Tạo link phân trang
*************************************************************/
function getPagingNav($sql, $pageNum, $rowsPerPage, $queryString = '')
{
	$result  = dbQuery($sql);
	$row     = dbFetchArray($result, MYSQL_ASSOC);
	$numrows = $row['numrows'];

	// số trang ta có khi phân trang
	$maxPage = ceil($numrows/$rowsPerPage);

	$self = $_SERVER['PHP_SELF'];

	// Tạo link 'previous' và 'next'
	// 'first page' và 'last page'

	// In ra 'previous' chỉ khi không ở trang 1
	if ($pageNum > 1)
	{
		$page = $pageNum - 1;
		$prev = " <a href=\"$self?page=$page{$queryString}\">[Prev]</a> ";

		$first = " <a href=\"$self?page=1{$queryString}\">[First Page]</a> ";
	}
	else
	{
		$prev  = ' [Prev] ';       // Ở trang 1, không bật 'previous' link
		$first = ' [First Page] '; // và không 'first page' link
	}

	// in ra 'next' link chỉ khi không ở trang cuối
	if ($pageNum < $maxPage)
	{
		$page = $pageNum + 1;
		$next = " <a href=\"$self?page=$page{$queryString}\">[Next]</a> ";

		$last = " <a href=\"$self?page=$maxPage{$queryString}{$queryString}\">[Last Page]</a> ";
	}
	else
	{
		$next = ' [Next] ';      // ở trang cuối, không bật 'next' link
		$last = ' [Last Page] '; // và không 'last page' link
	}

	// trả về trang thường
	return $first . $prev . " Showing page <strong>$pageNum</strong> of <strong>$maxPage</strong> pages " . $next . $last;
}

//Tao duong dan
function createPath($action){
    $path = "Localhost:8080/admincp/modules/common/main.php?a=".$action;
    return $path;
}

//Ham lay danh sach khach hang
function getUserInfo(){
    return dbSelectALl('userinfo');   
}

//Ham lay danh sach admin
function getAdminInfo(){
    return dbSelectAll('admin');
}

//Ham lay danh sach tac gia
function getAuthorInfo(){
    return dbSelectAll('author');
}

//Ham lay danh sach don hang
function getOrderList(){
    return dbSelectAll('orderbook');
}

//Ham lay so luong nguoi dung
function getNumUsers(){
   return dbCount('userinfo');
}

//Ham lay so luong hoa don
function getNumOrders(){
    return dbCount('orderbook');
}

//Ham lay tong gia tri cac don hang
function getTotalPrices(){
    $sql = "SELECT SUM(count) from orderdetail";
    return dbQuery($sql);
}


?>
