<?php
session_start();

$flag = -1;
$conn = mysqli_connect('localhost', 'root', '', 'htbepan');
$username = "";
$password = "";
require_once('class/user.php');
require_once('class/database.php');
$us = new User();
$db = new Database();


if (isset($_POST['manv']) && $_SERVER['REQUEST_METHOD'] == 'POST') {
  $manv = addslashes($_POST['manv']);
  $password = addslashes($_POST['password']);
  $data = $us->login($_POST['manv'], $_POST['password']);
  if ($data && $data->num_rows > 0) {
    $user = $data->fetch_assoc();
    if ($user['ChucVu'] == 1) {
      $_SESSION['MaNV'] = $user['MaNV'];
      $_SESSION['ChucVu'] = $user['ChucVu'];
      $_SESSION['TenNV'] = $user['TenNV'];
      header('Location:Admin_QuanLyBepAn/index.php');
    } else {
      $_SESSION['MaNV'] = $user['MaNV'];
      $_SESSION['TenNV'] = $user['TenNV'];
      setcookie('maNV', $user['MaNV'], time() + 60 * 60 * 12, "/");
      $idCart = $_COOKIE['idCart'];
      $idNV = $user['MaNV'];
      $sql = "UPDATE giohang set MaNV = '$idNV'  WHERE id = '$idCart'";
      $result = mysqli_query($conn, $sql);
      if ($result) {
        $sql = "UPDATE giohang set id = NULL WHERE MaNV = '$idNV'";
        $delete = mysqli_query($conn, $sql);
      }
      header('Location:index.php');
    }
  } else {
    $flag = 1;
  }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="icon" href="img/icon.png" type="image/x-icon" />
  <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script> -->
  <title>
    <?php
    $page = 'home';
    if (isset($_GET['page'])) {
      $page = $_GET['page'];
    }
    switch ($page) {
      case 'home':
        echo ('Trang chủ');
        break;
      case 'thucdon':
        echo ('Thực đơn');
        break;
      case 'gioithieu':
        echo ('Giới thiệu');
        break;
      case 'lienhe':
        echo ('Liên hệ');
        break;
      case 'login':
        echo ('Đăng nhập');
        break;
      case 'giohang':
        echo ('Giỏ hàng');
        break;
      case 'dexuat':
        echo ('Đề xuất món');
        break;
      case 'xempdm':
        echo ('Xem phiếu');
        break;
      case 'ctmonan':
        echo ('Chi tiết món ăn');
        break;
      case 'ct-pdm':
        echo ('Chi tiết phiếu');
        break;
      case 'dxcuaban':
        echo ('Đề xuất của bạn');
        break;
      case 'loaimon':
        echo ('Loại Món Ăn');
        break;
      case 'thongtinmon':
        echo ('Thông tin món');
        break;
      case 'timkiem':
        echo ('Tìm kiếm');
        break;
      case 'congno':
        echo ('Công nợ');
        break;
      default:
        echo ('404 Not Found');
        break;
    }
    ?>

  </title>
  <link rel="stylesheet" href="./css/bootstrap.min.css" />

  <script src="./js/bootstrap.bundle.min.js"></script>
  <link rel="stylesheet" href="./css/style.css" />
  <link rel="stylesheet" href="./css/info.css">
  <link rel="stylesheet" href="./css/login.css">
  <link rel="stylesheet" href="./Font/fontawesome-free-6.4.2-web/css/all.min.css" />

</head>

<body>

  <!-- header -->
  <?php
  include('./include/header.php')
  ?>

  <!-- end header -->

  <!-- navbar -->
  <?php
  include('./include/navbar.php')
  ?>

  <!-- end navbar -->
  <div class="container-fluid">
    <!-- Carousel -->
    <?php

    ?>
    <!-- Content -->
    <div class="container-fluid mt-3">
      <?php
      // $page = 'home';
      // if (isset($_GET['page'])) {
      //   $page = $_GET['page'];
      // }
      // echo $page;
      switch ($page) {
        case 'home':
          include('./pages/home.php');
          break;
        case 'thucdon':
          include('./pages/thucdon.php');
          break;
        case 'gioithieu':
          include('./pages/gioithieu.php');
          break;
        case 'lienhe':
          include('./pages/lienhe.php');
          break;
        case 'login':
          include('./pages/login.php');
          break;
        case 'giohang':
          include('./pages/datmon.php');
          break;
        case 'dexuat':
          include('./pages/dexuat.php');
          break;
        case 'xempdm':
          include('./pages/phieudatmon.php');
          break;
        case 'ctmonan':
          include('./pages/chitietmonan.php');
          break;
        case 'ct-pdm':
          include('./pages/chitetphieu.php');
          break;
        case 'dxcuaban':
          include('./pages/recommend.php');
          break;
        case 'thongtinmon':
          include('./pages/xemthongtin.php');
          break;
        case 'loaimon':
          include('./pages/loaimonan.php');
          break;
        case 'timkiem':
          include('./pages/timkiem.php');
          break;
        case 'congno':
          include('./pages/congno.php');
          break;
        default:
          include('./pages/404.php');
          break;
      }

      ?>
    </div>







    <!-- footer -->
    <?php
    include('./include/footer.php')
    ?>

    <!-- end footer -->
  </div>
  <script src="js/jquery-3.6.1.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
  <script src="js/index.js"></script>
  <script>

  </script>
</body>

</html>