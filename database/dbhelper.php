<!--  Chua cac function dung chung cho ca du an. 
   Chạy lệnh insert, update, select, delete viết chung thư viện ở đây-->
<?php
require_once('config.php');

// SQL: insert, update, delete
//function execute: nơi chạy các bộ lệnh SQL: insert, update, delete
function execute($sql) {
	//open connection: mở connection tới hệ thống csdl
	//(thư viện viết ra giúp phát triển dự án nhanh, mức độ nhỏ
	//và vừa, số lượng truy vấn ít, 
	//còn những hệ thống lớn thì tách đóng và mở kết nối riêng)
	$conn = mysqli_connect(HOST, USERNAME, PASSWORD, DATABASE);
	mysqli_set_charset($conn, 'utf8');

	//query: truy vấn
	mysqli_query($conn, $sql);

	//close connection: đóng kết nối
	mysqli_close($conn);
}

// SQL: select -> lay du lieu dau ra (select danh sach ban ghi, lay 1 ban ghi)
function executeResult($sql, $isSingle = false) {
	$data = null; //nơi chứa dữ liệu đầu ra

	//open connection
	$conn = mysqli_connect(HOST, USERNAME, PASSWORD, DATABASE);
	mysqli_set_charset($conn, 'utf8');

	//query
	$resultset = mysqli_query($conn, $sql);
	//fix dữ liệu resultset ra để biến thành các object bên trong bộ nhớ
	if($isSingle) {
		$data = mysqli_fetch_array($resultset, 1);
	} else {
		$data = [];
		while(($row = mysqli_fetch_array($resultset, 1)) != null) {
			$data[] = $row;
		}
	}

	//close connection
	mysqli_close($conn);

	return $data;
}