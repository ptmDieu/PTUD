<?php
$loai = $_GET['loai'];
?>

<?php
$pre_page = 3;
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
                    $ketqua = $monan->get_dish_by_category($loai, $star, $pre_page);

                    $maxpage = ceil(($monan->getNumRowCategory($loai) / $pre_page));

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
            echo '><a href="index.php?page=loaimon&loai=1&trang=' . $i . '">' . $i . '</a></li>';
        }
        ?>

    </ul>
</div>