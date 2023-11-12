<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Trang Chủ</title>
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
      $page = 'home';
      if (isset($_GET['page'])) {
        $page = $_GET['page'];
      }
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
</body>

</html>