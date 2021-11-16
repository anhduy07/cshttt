<?php
$fullname = $email = $msg = '';

if(!empty($_POST)) {
	$email = getPost('email');  
	$pwd = getPost('password');
	$pwd = getSecurityMD5($pwd);

	$sql = "select * from User where email = '$email' and password = '$pwd' and deleted = 0";
	$userExist = executeResult($sql, true); //executeResult: select
	if($userExist == null) {
		$msg = 'Bạn đã nhập sai email hoặc mật khẩu, vui lòng kiểm tra lại!!!';
	} else {
		//login thanh cong
		//chuc nang giữ đăng nhập
		$token = getSecurityMD5($userExist['email'].time());
		setcookie('token', $token, time() + 7 * 24 * 60 * 60, '/');
		$created_at = date('Y-m-d H:i:s');

		$_SESSION['user'] = $userExist;

		$userId = $userExist['id'];
		$sql = "insert into Tokens (user_id, token, created_at) values ('$userId', '$token', '$created_at')";
		execute($sql);

		header('Location: ../');
		die();
	}
}