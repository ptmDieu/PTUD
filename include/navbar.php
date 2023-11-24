<?php
include('class/giohang.php');
$giohang = new Cart();
$qty_cart = $giohang->get_quantity_product_cart();
$Cart = $giohang->getAll();


?>
<nav class="navbar navbar-expand-sm navbar-dark bg-dark">
    <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>
    </div>

    <div class="collapse navbar-collapse" id="mynavbar">
        <ul class="navbar-nav me-auto">
            <li class="nav-item menu1">
                <a class="nav-link" href="index.php">TRANG CHỦ</a>
            </li>
            <li class="nav-item menu">
                <a class="nav-link" href="?page=thucdon">THỰC ĐƠN</a>
            </li>
            <li class="nav-item menu">
                <a class="nav-link" href="?page=gioithieu">GIỚI THIỆU</a>
            </li>
            <li class="nav-item menu">
                <a class="nav-link" href="?page=lienhe">LIÊN HỆ</a>
            </li>
        </ul>
        <form class="d-flex search">
            <input class="form-control me-2" type="text" placeholder="Bạn cần tìm gì???" />
            <button class="btn btn-primary" type="button">
                <i class="fa-solid fa-magnifying-glass" style="color: #ffffff"></i>
            </button>
        </form>
        <div class="cart">
            <a href="?page=giohang" class="qty-cart"><i class="fa-solid fa-cart-shopping fa-2xl" style="color: #fcfcfd"></i> (<?php echo $qty_cart ?>) </a>
        </div>
    </div>
</nav>