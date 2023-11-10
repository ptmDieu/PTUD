<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Sunflower | Dashboard 3</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet"
    href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <!-- IonIcons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.min.css">
</head>
<!--
`body` tag options:

  Apply one or more of the following classes to to the body tag
  to get the desired effect

  * sidebar-collapse
  * sidebar-mini
-->

<body class="hold-transition sidebar-mini">
  <div class="wrapper">
    <!-- Navbar -->
    <nav class="main-header navbar navbar-expand navbar-white navbar-light">
      <!-- Left navbar links -->
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
        </li>
        <li class="nav-item d-none d-sm-inline-block">
          <a href="index3.php" class="nav-link">Trang chủ</a>
        </li>
        <li class="nav-item d-none d-sm-inline-block">
          <a href="#" class="nav-link">Liên hệ</a>
        </li>
      </ul>

      <!-- Right navbar links -->
      <ul class="navbar-nav ml-auto">
        <!-- Navbar Search -->
        <li class="nav-item">
          <a class="nav-link" data-widget="navbar-search" href="#" role="button">
            <i class="fas fa-search"></i>
          </a>
          <div class="navbar-search-block">
            <form class="form-inline">
              <div class="input-group input-group-sm">
                <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
                <div class="input-group-append">
                  <button class="btn btn-navbar" type="submit">
                    <i class="fas fa-search"></i>
                  </button>
                  <button class="btn btn-navbar" type="button" data-widget="navbar-search">
                    <i class="fas fa-times"></i>
                  </button>
                </div>
              </div>
            </form>
          </div>
        </li>

        <!-- Messages Dropdown Menu -->
        <li class="nav-item dropdown">
          <a class="nav-link" data-toggle="dropdown" href="#">
            <i class="far fa-comments"></i>
            <span class="badge badge-danger navbar-badge">3</span>
          </a>
          <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
            <a href="#" class="dropdown-item">
              <!-- Message Start -->
              <div class="media">
                <img src="dist/img/user1-128x128.jpg" alt="User Avatar" class="img-size-50 mr-3 img-circle">
                <div class="media-body">
                  <h3 class="dropdown-item-title">
                    Brad Diesel
                    <span class="float-right text-sm text-danger"><i class="fas fa-star"></i></span>
                  </h3>
                  <p class="text-sm">Call me whenever you can...</p>
                  <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
                </div>
              </div>
              <!-- Message End -->
            </a>
            <div class="dropdown-divider"></div>
            <a href="#" class="dropdown-item">
              <!-- Message Start -->
              <div class="media">
                <img src="dist/img/user8-128x128.jpg" alt="User Avatar" class="img-size-50 img-circle mr-3">
                <div class="media-body">
                  <h3 class="dropdown-item-title">
                    John Pierce
                    <span class="float-right text-sm text-muted"><i class="fas fa-star"></i></span>
                  </h3>
                  <p class="text-sm">I got your message bro</p>
                  <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
                </div>
              </div>
              <!-- Message End -->
            </a>
            <div class="dropdown-divider"></div>
            <a href="#" class="dropdown-item">
              <!-- Message Start -->
              <div class="media">
                <img src="dist/img/user3-128x128.jpg" alt="User Avatar" class="img-size-50 img-circle mr-3">
                <div class="media-body">
                  <h3 class="dropdown-item-title">
                    Nora Silvester
                    <span class="float-right text-sm text-warning"><i class="fas fa-star"></i></span>
                  </h3>
                  <p class="text-sm">The subject goes here</p>
                  <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
                </div>
              </div>
              <!-- Message End -->
            </a>
            <div class="dropdown-divider"></div>
            <a href="#" class="dropdown-item dropdown-footer">See All Messages</a>
          </div>
        </li>
        <!-- Notifications Dropdown Menu -->
        <li class="nav-item dropdown">
          <a class="nav-link" data-toggle="dropdown" href="#">
            <i class="far fa-bell"></i>
            <span class="badge badge-warning navbar-badge">15</span>
          </a>
          <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
            <span class="dropdown-item dropdown-header">15 Notifications</span>
            <div class="dropdown-divider"></div>
            <a href="#" class="dropdown-item">
              <i class="fas fa-envelope mr-2"></i> 4 new messages
              <span class="float-right text-muted text-sm">3 mins</span>
            </a>
            <div class="dropdown-divider"></div>
            <a href="#" class="dropdown-item">
              <i class="fas fa-users mr-2"></i> 8 friend requests
              <span class="float-right text-muted text-sm">12 hours</span>
            </a>
            <div class="dropdown-divider"></div>
            <a href="#" class="dropdown-item">
              <i class="fas fa-file mr-2"></i> 3 new reports
              <span class="float-right text-muted text-sm">2 days</span>
            </a>
            <div class="dropdown-divider"></div>
            <a href="#" class="dropdown-item dropdown-footer">See All Notifications</a>
          </div>
        </li>
        <li class="nav-item">
          <a class="nav-link" data-widget="fullscreen" href="#" role="button">
            <i class="fas fa-expand-arrows-alt"></i>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" data-widget="control-sidebar" data-slide="true" href="#" role="button">
            <i class="fas fa-th-large"></i>
          </a>
        </li>
      </ul>
    </nav>
    <!-- /.navbar -->

    <!-- Main Sidebar Container -->
    <aside class="main-sidebar sidebar-dark-primary elevation-4">
      <!-- Brand Logo -->
      <a href="index3.php" class="brand-link">
        <img src="dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
          style="opacity: .8">
        <span class="brand-text font-weight-light">Sunflower</span>
      </a>

      <!-- Sidebar -->
      <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
          <div class="image">
            <img src="dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
          </div>
          <div class="info">
            <a href="#" class="d-block">Admin_QLB</a>
          </div>
        </div>

        <!-- SidebarSearch Form -->
        <div class="form-inline">
          <div class="input-group" data-widget="sidebar-search">
            <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
            <div class="input-group-append">
              <button class="btn btn-sidebar">
                <i class="fas fa-search fa-fw"></i>
              </button>
            </div>
          </div>
        </div>

        <!-- Sidebar Menu -->
        <nav class="mt-2">
          <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
            <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
            <li class="nav-item menu-open">
              <a href="#" class="nav-link active">
                <i class="nav-icon fas fa-tachometer-alt"></i>
                <p>
                  Dashboard
                  <i class="right fas fa-angle-left"></i>
                </p>
              </a>
              <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="./index.php" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Dashboard v1</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="./index2.php" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Dashboard v2</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="./index3.php" class="nav-link active">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Dashboard v3</p>
                  </a>
                </li>
              </ul>
            </li>
            <!-- QUẢN LÝ TÀI KHOẢN -->
            <li class="nav-item">
              <a href="#" class="nav-link">
                <i class="nav-icon fas fa-users"></i>
                <p>
                  Tài khoản
                  <i class="fas fa-angle-left right"></i>
                </p>
              </a>
              <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="pages/examples/nguyenVatLieu.php" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Xem tài khoản</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="pages/examples/nguyenVatLieu-Them.php" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Thêm tài khoản</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="pages/examples/nguyenVatLieu-Sua.php" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Sửa tài khoản</p>
                    <!-- Thay đổi trạng thái tài khoản từ đang làm việc -- đã nghỉ. -->
                  </a>
                </li>
              </ul>
            </li>
            <!-- NGUYÊN VẬT LIỆU -->
            <li class="nav-item">
              <a href="#" class="nav-link">
                <i class="nav-icon fas fa-carrot"></i>
                <p>
                  Nguyên vật liệu
                  <i class="fas fa-angle-left right"></i>
                </p>
              </a>
              <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="pages/examples/nguyenVatLieu.php" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Xem nguyên vật liệu</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="pages/examples/nguyenVatLieu-Them.php" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Thêm nguyên vật liệu</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="pages/examples/nguyenVatLieu-Them.php" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p> Sửa nguyên vật liệu</p>
                  </a>
                </li>
              </ul>
            </li>
            <!-- Định lượng -->
            <li class="nav-item">
              <a href="#" class="nav-link">
                <i class="nav-icon fas fa-balance-scale"></i>
                <p>
                  Định lượng
                  <i class="fas fa-angle-left right"></i>
                </p>
              </a>
              <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="pages/examples/nguyenVatLieu.php" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Xem định lượng</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="pages/examples/nguyenVatLieu-Them.php" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Thêm định lượng</p>
                  </a>
                </li>
              </ul>
            </li>
            <!-- TÍNH NGUYÊN VẬT LIỆU -->
            <li class="nav-item">
              <a href="pages/examples/xemDanhGia.php" class="nav-link">
                <i class="nav-icon fas fa-calculator"></i>
                <p>Tính nguyên vật liệu</p>
              </a>
            </li>
            <!-- THỰC ĐƠN -->
            <li class="nav-item">
              <a href="#" class="nav-link">
                <i class="nav-icon fas fa-book"></i>
                <p>
                  Thực đơn
                  <i class="fas fa-angle-left right"></i>
                </p>
              </a>
              <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="pages/examples/nguyenVatLieu.php" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Xem thực đơn</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="pages/examples/nguyenVatLieu-Them.php" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Thêm thực đơn</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="pages/examples/nguyenVatLieu-Sua.php" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Sửa thực đơn</p>
                  </a>
                </li>
              </ul>
            </li>
            <!-- MÓN ĂN -->
            <li class="nav-item">
              <a href="#" class="nav-link">
                <i class="nav-icon fas fa-hamburger"></i>
                <p>
                  Món ăn
                  <i class="fas fa-angle-left right"></i>
                </p>
              </a>
              <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="pages/examples/nguyenVatLieu.php" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Xem món ăn</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="pages/examples/nguyenVatLieu-Them.php" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Thêm món ăn</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="pages/examples/nguyenVatLieu-Them.php" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Sửa món ăn</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="pages/examples/nguyenVatLieu-Sua.php" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Đổi trạng thái món ăn</p>
                  </a>
                </li>
              </ul>
            </li>
            <!-- THỐNG KÊ -->
            <li class="nav-item">
              <a href="#" class="nav-link">
                <i class="nav-icon fas fa-chart-pie"></i>
                <p>
                  Thống kê
                  <i class="right fas fa-angle-left"></i>
                </p>
              </a>
              <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="pages/examples/nguyenVatLieu.php" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Thống kê số lượng phần ăn</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="pages/charts/inline.php" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Thống kê phiếu đặt món</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="pages/charts/flot.php" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Thống kê doanh thu</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="pages/charts/flot.php" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Thống kê công nợ</p>
                  </a>
                </li>
              </ul>
            </li>
            <!-- Phiếu đặt món -->
            <li class="nav-item">
              <a href="#" class="nav-link">
                <i class="nav-icon fas fa-clipboard-list"></i>
                <p>
                  Xem phiếu đặt món
                </p>
              </a>
            </li>
            <!-- XEM ĐỀ XUẤT -->
            <li class="nav-item">
              <a href="../" class="nav-link">
                <i class="nav-icon fas fa-comment"></i>
                <p>Xem đánh giá</p>
              </a>
            </li>
            <!-- XEM ĐỀ XUẤT -->
            <li class="nav-item">
              <a href="../" class="nav-link">
                <i class="nav-icon fas fa-star"></i>
                <p>Xem đề xuất</p>
              </a>
            </li>
            <!-- TÌM KIẾM -->
            <li class="nav-item">
              <a href="../" class="nav-link">
                <i class="nav-icon fas fa-search"></i>
                <p>Tìm theo tên</p>
              </a>
            </li>
          </ul>
        </nav>
        <!-- /.sidebar-menu -->
      </div>
      <!-- /.sidebar -->
    </aside>

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <div class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">
              <h1 class="m-0">Dashboard v3</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
              <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="#">Trang chủ</a></li>
                <li class="breadcrumb-item active">Dashboard v3</li>
              </ol>
            </div><!-- /.col -->
          </div><!-- /.row -->
        </div><!-- /.container-fluid -->
      </div>
      <!-- /.content-header -->

      <!-- Main content -->
      <div class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-lg-6">
              <div class="card">
                <div class="card-header border-0">
                  <div class="d-flex justify-content-between">
                    <h3 class="card-title">Số lượng thành viên truy cập hệ thống</h3>
                    <a href="javascript:void(0);">Xem</a>
                  </div>
                </div>
                <div class="card-body">
                  <div class="d-flex">
                    <p class="d-flex flex-column">
                      <span class="text-bold text-lg">820</span>
                      <span>Thành viên</span>
                    </p>
                    <p class="ml-auto d-flex flex-column text-right">
                      <span class="text-success">
                        <i class="fas fa-arrow-up"></i> 12.5%
                      </span>
                      <span class="text-muted">Tính từ tuần trước</span>
                    </p>
                  </div>
                  <!-- /.d-flex -->

                  <div class="position-relative mb-4">
                    <canvas id="visitors-chart" height="200"></canvas>
                  </div>

                  <div class="d-flex flex-row justify-content-end">
                    <span class="mr-2">
                      <i class="fas fa-square text-primary"></i> Tuần này
                    </span>

                    <span>
                      <i class="fas fa-square text-gray"></i> Tuần trước
                    </span>
                  </div>
                </div>
              </div>
              <!-- /.card -->
              <div class="card">
                <div class="card-header border-0">
                  <h3 class="card-title">Món ăn</h3>
                  <div class="card-tools">
                    <a href="#" class="btn btn-tool btn-sm">
                      <i class="fas fa-download"></i>
                    </a>
                    <a href="#" class="btn btn-tool btn-sm">
                      <i class="fas fa-bars"></i>
                    </a>
                  </div>
                </div>
                <div class="card-body table-responsive p-0">
                  <table class="table table-striped table-valign-middle">
                    <thead>
                      <tr>
                        <th>Tên món</th>
                        <th>Giá</th>
                        <th>Tỉ lệ đặt món</th>
                        <th></th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td>
                          <img src="dist/img/index3-01.jpg" alt="Product 1" class="img-circle img-size-32 mr-2">
                          Cánh gà mắn tỏi
                        </td>
                        <td>20.000 VNĐ</td>
                        <td>
                          <small class="text-success mr-1">
                            <i class="fas fa-arrow-up"></i>
                            12%
                          </small>
                          120 suất
                        </td>
                        <td>
                          <a href="#" class="text-muted">
                            <i class="fas fa-search"></i>
                          </a>
                        </td>
                      </tr>
                      <tr>
                        <td>
                          <img src="dist/img/index3-02.jpg" alt="Product 1" class="img-circle img-size-32 mr-2">
                          Thịt heo kho tàu
                        </td>
                        <td>29.000 VNĐ</td>
                        <td>
                          <small class="text-warning mr-1">
                            <i class="fas fa-arrow-down"></i>
                            0.5%
                          </small>
                          103 Suất
                        </td>
                        <td>
                          <a href="#" class="text-muted">
                            <i class="fas fa-search"></i>
                          </a>
                        </td>
                      </tr>
                      <tr>
                        <td>
                          <img src="dist/img/index3-03.jpg" alt="Product 1" class="img-circle img-size-32 mr-2">
                          Thịt heo quay
                        </td>
                        <td>20.000 VNĐ</td>
                        <td>
                          <small class="text-danger mr-1">
                            <i class="fas fa-arrow-down"></i>
                            3%
                          </small>
                          198 Suất
                        </td>
                        <td>
                          <a href="#" class="text-muted">
                            <i class="fas fa-search"></i>
                          </a>
                        </td>
                      </tr>
                      <tr>
                        <td>
                          <img src="dist/img/index3-04.jpg" alt="Product 1" class="img-circle img-size-32 mr-2">
                          Mực hành tinh
                          <span class="badge bg-danger">NEW</span>
                        </td>
                        <td>22.000 VNĐ</td>
                        <td>
                          <small class="text-success mr-1">
                            <i class="fas fa-arrow-up"></i>
                            63%
                          </small>
                          87 Suất
                        </td>
                        <td>
                          <a href="#" class="text-muted">
                            <i class="fas fa-search"></i>
                          </a>
                        </td>
                      </tr>
                    </tbody>
                  </table>
                </div>
              </div>
              <!-- /.card -->
            </div>
            <!-- /.col-md-6 -->
            <div class="col-lg-6">
              <div class="card">
                <div class="card-header border-0">
                  <div class="d-flex justify-content-between">
                    <h3 class="card-title">Số lượng phiếu đặt món</h3>
                    <a href="javascript:void(0);">Xem</a>
                  </div>
                </div>
                <div class="card-body">
                  <div class="d-flex">
                    <p class="d-flex flex-column">
                      <span class="text-bold text-lg">$18,230.00</span>
                      <span>Phiếu đặt món</span>
                    </p>
                    <p class="ml-auto d-flex flex-column text-right">
                      <span class="text-success">
                        <i class="fas fa-arrow-up"></i> 33.1%
                      </span>
                      <span class="text-muted">Tính từ tháng trước</span>
                    </p>
                  </div>
                  <!-- /.d-flex -->

                  <!-- đồ thị -->
                  <div class="position-relative mb-4">
                    <canvas id="sales-chart" height="200"></canvas>
                  </div>

                  <div class="d-flex flex-row justify-content-end">
                    <span class="mr-2">
                      <i class="fas fa-square text-primary"></i> Năm nay
                    </span>

                    <span>
                      <i class="fas fa-square text-gray"></i> Năm ngoái
                    </span>
                  </div>
                </div>
              </div>
              <!-- /.card -->
              <div class="card">
                <div class="card-header border-0">
                  <h3 class="card-title">Tổng quan</h3>
                  <div class="card-tools">
                    <a href="#" class="btn btn-sm btn-tool">
                      <i class="fas fa-download"></i>
                    </a>
                    <a href="#" class="btn btn-sm btn-tool">
                      <i class="fas fa-bars"></i>
                    </a>
                  </div>
                </div>
                <div class="card-body">
                  <div class="d-flex justify-content-between align-items-center border-bottom mb-3">
                    <p class="text-success text-xl">
                      <i class="nav-icon fas fa-clipboard-list"></i>
                    </p>
                    <p class="d-flex flex-column text-right">
                      <span class="font-weight-bold">
                        <i class="ion ion-android-arrow-up text-success"></i> 12%
                      </span>
                      <span class="text-muted">Tỉ lệ đặt món</span>
                    </p>
                  </div>
                  <!-- /.d-flex -->
                  <div class="d-flex justify-content-between align-items-center border-bottom mb-3">
                    <p class="text-warning text-xl">
                      <i class="nav-icon fas fa-hamburger"></i>
                    </p>
                    <p class="d-flex flex-column text-right">
                      <span class="font-weight-bold">
                        <i class="ion ion-android-arrow-up text-warning"></i> 0.8%
                      </span>
                      <span class="text-muted">Tỉ lệ món ăn mới</span>
                    </p>
                  </div>
                  <!-- /.d-flex -->
                  <div class="d-flex justify-content-between align-items-center mb-0">
                    <p class="text-pink text-xl">
                      <i class="nav-icon fa fa-users"></i>
                    </p>
                    <p class="d-flex flex-column text-right">
                      <span class="font-weight-bold">
                        <i class="ion ion-android-arrow-down text-danger"></i> 1%
                      </span>
                      <span class="text-muted">Tỉ lệ đăng ký</span>
                    </p>
                  </div>
                  <!-- /.d-flex -->
                  <div class="d-flex justify-content-between align-items-center mb-0">
                    <p class="text-orange text-xl">
                      <i class="nav-icon fas fa-carrot"></i>
                    </p>
                    <p class="d-flex flex-column text-right">
                      <span class="font-weight-bold">
                        <i class="ion ion-android-arrow-down text-danger"></i> 3%
                      </span>
                      <span class="text-muted">Tỉ lệ nguyên vật liệu dư, thiếu</span>
                    </p>
                  </div>
                </div>
              </div>
            </div>
            <!-- /.col-md-6 -->
          </div>
          <!-- /.row -->
        </div>
        <!-- /.container-fluid -->
      </div>
      <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->

    <!-- Control Sidebar -->
    <aside class="control-sidebar control-sidebar-dark">
      <!-- Control sidebar content goes here -->
    </aside>
    <!-- /.control-sidebar -->

    <!-- Main Footer -->
    <footer class="main-footer">
      <strong>Copyright &copy; 2014-2021 <a href="https://Sunflower.io">Sunflower.io</a>.</strong>
      All rights reserved.
      <div class="float-right d-none d-sm-inline-block">
        <b>Version</b> 3.2.0
      </div>
    </footer>
  </div>
  <!-- ./wrapper -->

  <!-- REQUIRED SCRIPTS -->

  <!-- jQuery -->
  <script src="plugins/jquery/jquery.min.js"></script>
  <!-- Bootstrap -->
  <script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
  <!-- AdminLTE -->
  <script src="dist/js/adminlte.js"></script>

  <!-- OPTIONAL SCRIPTS -->
  <script src="plugins/chart.js/Chart.min.js"></script>
  <!-- AdminLTE for demo purposes -->
  <script src="dist/js/demo.js"></script>
  <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
  <script src="dist/js/pages/dashboard3.js"></script>
</body>

</html>