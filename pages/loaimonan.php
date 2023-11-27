<?php
$loai = $_GET['loai'];
?>


<div class="row">

    <!-- sidebar menu -->
    <?php
    include('./include/sidebar_menu.php')

    ?>
    <!-- end sidebar -->
    <div class="col-lg-9 col-md-9 col-sm-12">
        <div class="row">
            <span class="title-mon-an">
                <?php
                if ($loai == 1) {
                    echo ('MÓN ĂN CHÍNH');
                } else if ($loai == 2) {
                    echo ('MÓN CANH');
                } else {
                    echo ('MÓN TRÁNG MIỆNG');
                }

                ?>
            </span>
        </div>
        <section class="section">
            <div class="row p-3">
                <?php
                include("./class/monan.php");
                $monan = new Monan();
                if ($loai <= 3 && $loai >= 1) {
                    $ketqua = $monan->get_dish_by_category($loai);


                    // var_dump($monan);
                    while ($row = mysqli_fetch_array($ketqua)) {

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
                } else {
                    echo (' <h4 class="text-center">"Chưa có món ăn theo loại này!"</h4>');
                }



                ?>

            </div>
        </section>
    </div>
</div>