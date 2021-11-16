<!-- chứa các hàm tiện ích cho cả dự án.
    có khả năng tái sử dụng code cao, sử dụng hàm ở nhiều nơi
    của dự án -->
<!-- Viết thư viện để lấy dữ liệu get, post, cookie  -->
<?php
//$sql = "insert into Role(name) values ('Admin')";
//$sql = "insert into Role(name) values ('$name')"; => $name = 'Admin => sql injection => join => framework (Laravel) => fix
//$name = 'Admin => \'Admin
//fix lỗi sql injection => $sql = "ghi cau lenh sql vao"
function fixSqlInject($sql) {
	$sql = str_replace('\\', '\\\\', $sql);
	$sql = str_replace('\'', '\\\'', $sql);
	return $sql;
}

function getGet($key) {
	$value = '';
	if(isset($_GET[$key])) {
		$value = $_GET[$key];
		$value = fixSqlInject($value);
	}
	return trim($value);  //trim: fix kí tự chẵn
}

function getPost($key) {
	$value = '';
	if(isset($_POST[$key])) {
		$value = $_POST[$key];
		$value = fixSqlInject($value);
	}
	return trim($value);
}

function getRequest($key) {
	$value = '';
	if(isset($_REQUEST[$key])) {
		$value = $_REQUEST[$key];
		$value = fixSqlInject($value);
	}
	return trim($value);
}

function getCookie($key) {
	$value = '';
	if(isset($_COOKIE[$key])) {
		$value = $_COOKIE[$key];
		$value = fixSqlInject($value);
	}
	return trim($value);
}

function getSecurityMD5($pwd) {
	return md5(md5($pwd).PRIVATE_KEY);
}

function getUserToken() {
	if(isset($_SESSION['user'])) {
		return $_SESSION['user'];
	}
	$token = getCookie('token');
	$sql = "select * from Tokens where token = '$token'";
	$item = executeResult($sql, true);
	if($item != null) {
		$userId = $item['user_id'];
		$sql = "select * from User where id = '$userId' and deleted = 0";
		$item = executeResult($sql, true);
		if($item != null) {
			$_SESSION['user'] = $item;
			return $item;
		}
	}

	return null;
}
// lưu file ảnh
function moveFile($key, $rootPath = "../../") {
	if(!isset($_FILES[$key]) || !isset($_FILES[$key]['name']) || $_FILES[$key]['name'] == '') {
		return '';
	}

	$pathTemp = $_FILES[$key]["tmp_name"];

	$filename = $_FILES[$key]['name'];
	
   //lưu file vào đường dẫn
	$newPath="assets/photos/".$filename;
   //di chuyển file $pathTemp và đẩy sang lưu đường dẫn mới $rootPath.$newPath
	move_uploaded_file($pathTemp, $rootPath.$newPath);

	return $newPath;
}
// Hàm fix đường dẫn
function fixUrl($thumbnail, $rootPath = "../../") {
	if(stripos($thumbnail, 'http://') !== false || stripos($thumbnail, 'https://') !== false) {
	} else {
		$thumbnail = $rootPath.$thumbnail;
	}

	return $thumbnail;
}