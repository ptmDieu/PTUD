<?php
$pre_page = 6;
if (isset($_GET['trang'])) {
    $trang  = $_GET['trang'];
} else {
    $trang = 1;
}

if ($trang == "" || $trang == 1) {
    $star = 0;
} else {
    $star = ($trang * $pre_page) - $pre_page;
}

?>
<div id="demo" class="carousel slide " data-bs-ride="carousel">
    <!-- Indicators/dots -->
    <div class="carousel-indicators">
        <button type="button" data-bs-target="#demo" data-bs-slide-to="0" class="active"></button>
        <button type="button" data-bs-target="#demo" data-bs-slide-to="1"></button>
        <button type="button" data-bs-target="#demo" data-bs-slide-to="2"></button>
    </div>

    <!-- Slider -->
    <div class="carousel-inner slider">
        <div class="carousel-item active">
            <img src="./img/slider_1.webp  " alt="Slider 1" class="d-block w-100" />
        </div>
        <div class="carousel-item">
            <img src="./img/banner.jpg" alt="Slider 2" class="d-block w-100" />
        </div>
        <div class="carousel-item">
            <img src="./img/banner2.jpg" style="object-fit: cover" alt="Slider 3" class="d-block w-100" />
        </div>

        <!-- Left and right btn -->
        <button class="carousel-control-prev" type="button" data-bs-target="#demo" data-bs-slide="prev">
            <span class="carousel-control-prev-icon"></span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#demo" data-bs-slide="next">
            <span class="carousel-control-next-icon"></span>
        </button>
    </div>
</div>

<div class="row">

    <!-- sidebar menu -->
    <?php
    include('./include/sidebar_menu.php')

    ?>
    <!-- end sidebar -->
    <div class="col-lg-9 col-md-9 col-sm-12">
        <div class="row">
            <span class="title-mon-an">MÓN ĂN</span>
        </div>
        <section class="section">
            <div class="row p-3">
                <?php
                include("./class/monan.php");
                $mon = new Monan();

                $monan = $mon->getAll($star);
                $numrow = $mon->getNumRow();
                $maxpage = ceil($numrow / $pre_page);

                while ($row = mysqli_fetch_array($monan)) {

                    echo ('
                    <div class="col-lg-4 col-md-6 col-sm-12 mt-3">
                    <div class="card">
                        <img class="card-img-top" style="height: 200px;" src="./Admin_QuanLyBepAn/uploads/' . $row['HinhAnh'] . '" alt="' . $row['TenMonAn'] . '" />
                        <div class="card-body">
                            <h4 class="card-title">' . $row['TenMonAn'] . '</h4>
                            <p class="card-text">' . $row['ThanhPhan'] . '</p>
                            <h4 class="card-title">' . number_format($row['GiaTien']) . '</h4>
                            <a href="?page=thongtinmon&id=' . $row['MaMonAn'] . '"  class="btn btn-primary">Xem chi tiết</a>
                        </div>
                    </div>
                </div>
                    ');
                }


                ?>
            </div>
        </section>
    </div>
</div>
<div class="list">
    <span>Trang:</span>
    <ul>
        <!-- <li><a href="#">1</a></li>
        <li><a href="#">2</a></li>
        <li><a href="#">3</a></li> -->
        <?php
        for ($i = 1; $i <= $maxpage; $i++) {
            echo '<li';
            // Kiểm tra nếu đây là trang hiện tại, thêm class active
            if ($i == $trang) {
                echo ' class="active"';
            }
            echo '><a href="index.php?trang=' . $i . '">' . $i . '</a></li>';
        }
        ?>

    </ul>
</div>