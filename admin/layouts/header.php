<?php
  session_start();
  require_once($baseUrl.'../utils/utility.php');
  require_once($baseUrl.'../database/dbhelper.php');

  $user = getUserToken();
  if($user == null) {
    header('Location: '.$baseUrl.'authen/login.php');
    die();
  }
?>

<!DOCTYPE html>
<html>
<head>
	<title><?=$title?></title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="icon" type="image/png" href="https://dichvu24hpro.com/wp-content/uploads/2018/09/1.-Gi%C3%A0y.png" />

	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">

	<link rel="stylesheet" type="text/css" href="<?=$baseUrl?>../assets/css/dashboard.css">
	<!-- Nhúng icon boostrapt -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.6.1/font/bootstrap-icons.css">

	<!-- jQuery library -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

	<!-- Popper JS -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

	<!-- Latest compiled JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
  <style>
    
  </style>

</head>
<body>

  <div class="row">
      <div class="sidebar-container ">
  <div class="sidebar-logo">
    Shoe shop
  </div>
  <ul class="sidebar-navigation">
    <li>
      <a href="<?=$baseUrl?>">
        <i class="bi bi-house-door" aria-hidden="true"></i>  Dashboard
      </a>
    </li>
    <li>
      <a href="<?=$baseUrl?>category">
        <i class="bi bi-folder" aria-hidden="true"></i> Danh mục sản phẩm
      </a>
    </li>
    <li>
      <a href="<?=$baseUrl?>product">
        <i class="bi bi-file-earmark-text" aria-hidden="true"></i> Sản phẩm
      </a>
    </li>
    <li>
      <a href="<?=$baseUrl?>order">
        <i class="bi bi-minecart" aria-hidden="true"></i> Quản lí đơn hàng
      </a>
    </li>
    <li>
      <a href="<?=$baseUrl?>feedback">
        <i class="bi bi-question-circle" aria-hidden="true"></i> Quản lí phản hồi
      </a>
    </li>
    <li>
      <a href="<?=$baseUrl?>user">
        <i class="bi bi-people" aria-hidden="true"></i> Quản lí người dùng
      </a>
    </li>
    <li>
      <a href="<?=$baseUrl?>authen/logout.php">
        <i class="bi bi-x-circle" aria-hidden="true"></i> Thoát
      </a>
    </li>
  </ul>
</div>

    
    <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
      <!-- hien thi tung chuc nang cua trang quan tri START-->


      