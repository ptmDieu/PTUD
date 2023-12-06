<div class="row">

    <!-- sidebar menu -->
    <?php
    include('./include/sidebar_menu.php')

    ?>
    <!-- end sidebar -->
    <div class="col-lg-9 col-md-9 col-sm-12">
        <div class="row">
            <span class="title-mon-an">TÌM KIẾM</span>
        </div>
        <section class="section">
            <div class="row p-3">
                <?php
                $key = "";
                if (isset($_POST['key'])) {
                    $key = $_POST['key'];
                }

                include("./class/monan.php");
                $dish = new Monan();

                if ($result = $dish->searchDish($key)) {
                    while ($row = mysqli_fetch_array($result)) {
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
                    echo ("<h4> Không tìm thấy sản phẩm nào!</h4>");
                }

                ?>
            </div>
        </section>
    </div>
</div>