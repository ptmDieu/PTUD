<?php
if (!isset($_COOKIE['idCart'])) {
    setcookie('idCart', uniqid(), time() + 60 * 60 * 12);
}

if (isset($_GET['action']) == 'logout') {
    session_destroy();
    setcookie('maNV', $user['MaNV'], time() - 60 * 60 * 24 * 30, "/");
    header('location:index.php');
}
// echo $_SESSION['MaKhachHang'];



?>


<div class="container-fluid bg-light">
    <div class="row">
        <h6 class="hi">Chào mừng bạn đến với bếp ăn tập đoàn!</h6>
        <?php
        if (!isset($_SESSION['MaNV'])) {
            echo (' <a href="?page=login" class="login"><span>Đăng nhập</span></a>');
        }
        ?>



    </div>
</div>
<header>
    <div class="container-fluid">
        <div class="row main-header">
            <div class="col-lg-4 col-md-4 col-sm-12">
                <a href="index.php"><img class="logo" src="./img/LOGO-01.png" alt="Logo" /></a>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-12 time">
                <div class="clock">
                    <i class="fa-regular fa-clock" style="color: #080808; font-size: 50px"></i>
                </div>
                <div class="time-content">
                    <span class="time-title">OPEN:</span><br />
                    <span class="time-info">10AM - 17PM</span>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-12 user">
                <i class="fa-solid fa-user fa-2xl"></i>
                <div class="title-user">
                    <ul class="nav">
                        <li class="nav-item dropdown">
                            <a class="dropdown-toggle" data-bs-toggle="dropdown" style="color: #080808; text-decoration: none" href="#">
                                <?php
                                if (isset($_SESSION['MaNV'])) {
                                    echo $_SESSION['TenNV'];
                                } else {
                                    echo ('User');
                                }
                                ?></a>
                            <ul class="dropdown-menu">
                                <li>
                                    <a class="dropdown-item" href="?page=xempdm">Xem Phiếu đặt món</a>
                                </li>
                                <li><a class="dropdown-item" href="?page=congno">Xem công nợ</a></li>
                                <li><a class="dropdown-item" href="?page=dexuat">Đề xuất món</a></li>
                                <li><a class="dropdown-item" href="?page=dxcuaban">Đề xuất của bạn</a></li>
                                <?php
                                if (isset($_SESSION['MaNV'])) {
                                    echo ('<li><a class="dropdown-item" href="index.php?action=logout">Đăng xuất</a></li>');
                                }
                                ?>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</header>