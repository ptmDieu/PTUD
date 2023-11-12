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

                $monan = $mon->getAll();

                // var_dump($monan);
                while ($row = mysqli_fetch_array($monan)) {

                    echo ('
                    <div class="col-lg-4 col-md-6 col-sm-12 mt-3">
                    <div class="card">
                        <img class="card-img-top" style="height: 250px;" src="./uploads/' . $row['HinhAnh'] . '" alt="' . $row['TenMonAn'] . '" />
                        <div class="card-body">
                            <h4 class="card-title">' . $row['TenMonAn'] . '</h4>
                            <p class="card-text">' . $row['ThanhPhan'] . '</p>
                            <h4 class="card-title">' . number_format($row['GiaTien']) . '</h4>
                            <a href="?page=ctmonan&id=' . $row['MaMonAn'] . '"  class="btn btn-primary">Xem chi tiết</a>
                        </div>
                    </div>
                </div>
                    ');
                }


                ?>
                <!-- <div class="col-lg-4 col-md-6 col-sm-12">
                    <div class="card">
                        <img class="card-img-top" src="./img/comtam.jpg" alt="Cơm" />
                        <div class="card-body">
                            <h4 class="card-title">Cơm tấm</h4>
                            <p class="card-text">Sườn, bì, chả</p>
                            <h4 class="card-title">35.000đ</h4>
                            <a href="?page=chitetmon" class="btn btn-primary">Đặt món</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12">
                    <div class="card">
                        <img class="card-img-top" src="./img/comtam.jpg" alt="Cơm" />
                        <div class="card-body">
                            <h4 class="card-title">Cơm tấm</h4>
                            <p class="card-text">Sườn, bì, chả</p>
                            <h4 class="card-title">35.000đ</h4>
                            <a href="?page=chitetmon" class="btn btn-primary">Đặt món</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12">
                    <div class="card">
                        <img class="card-img-top" src="./img/comtam.jpg" alt="Cơm" />
                        <div class="card-body">
                            <h4 class="card-title">Cơm tấm</h4>
                            <p class="card-text">Sườn, bì, chả</p>
                            <h4 class="card-title">35.000đ</h4>
                            <a href="?page=chitetmon" class="btn btn-primary">Đặt món</a>
                        </div>
                    </div>
                </div> -->
            </div>
        </section>
    </div>
</div>