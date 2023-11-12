<!-- Main content -->
<?php
include("./classes/food.php");

$id = '';
if (isset($_GET['id'])) {
    $id = $_GET['id'];
}
$ct = new Food();
$result = $ct->getDishByID($id);
$result = mysqli_fetch_array($result);
$dinhluong = $ct->getFoodCost($id);

?>
<section class="content">
    <style>
        .title-content {
            font-size: 20px;
            line-height: 50px;
            margin-right: 10px;

        }
    </style>
    <!-- Default box -->
    <div class="card card-solid">
        <div class="card-body">
            <div class="row">
                <div class="col-12 col-sm-6">
                    <h3 class="d-inline-block d-sm-none"><?php echo $result['TenMonAn'] ?></h3>
                    <div class="col-12">
                        <img src="../uploads/<?php echo $result['HinhAnh'] ?>" class="product-image" alt="<?php echo $result['TenMonAn'] ?>">
                    </div>
                </div>
                <div class="col-12 col-sm-6">
                    <h3 class="my-3"><?php echo $result['TenMonAn'] ?></h3>
                    <hr>

                    <div>
                        <label class="title-content">Mã món ăn:</label>
                        <span class="title-content">
                            <?php echo $result['MaMonAn'] ?>
                        </span>
                    </div>
                    <div>
                        <label class="title-content">Mô tả:</label>
                        <span class="title-content">
                            <?php echo $result['MoTa'] ?>
                        </span>
                    </div>
                    <div>
                        <label class="title-content">Giá bán:</label>
                        <span class="title-content">
                            <?php echo number_format($result['GiaTien']) ?>
                        </span>
                    </div>
                    <div>
                        <label class="title-content">Chi phí:</label>
                        <span class="title-content">
                            <?php echo number_format($result['GiaTien']) ?>
                        </span>
                    </div>
                    <div>
                        <label class="title-content">Thành phần:</label>
                        <span class="title-content">
                            <?php echo $result['ThanhPhan'] ?>
                        </span>
                    </div>
                    <div>
                        <label class="title-content">Trạng thái:</label>
                        <span class="title-content">
                            <?php
                            $trangthai = $result['TrangThai']  == 1 ? "Đang kinh doanh" : "Ngừng kinh doanh";
                            echo $trangthai;
                            ?>
                        </span>
                    </div>



                </div>
            </div>
            <div class="row mt-4">
                <div class="col-3 col-sm-3"></div>

                <div class="col-6 col-sm-6">
                    <h4 class="text-center">BẢNG ĐỊNH LƯỢNG MÓN ĂN</h4>
                    <table class="table table-striped">
                        <thead>

                            <tr>
                                <th>Nguyên vật liệu</th>
                                <th>Số lượng</th>
                                <th>Đơn vị tính</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            while ($row = mysqli_fetch_array($dinhluong)) {
                                echo ('
                                <tr>
                                    <td>' . $row['TenNVL'] . '</td>
                                    <td>' . $row['DinhLuong'] . '</td>
                                    <td>' . $row['DonViTinh'] . '</td>
                                    
                                </tr>');
                            }


                            ?>

                        </tbody>
                    </table>
                </div>
                <div class="col-3 col-sm-3"></div>
            </div>
        </div>
        <!-- /.card-body -->
    </div>
    <!-- /.card -->

</section>
<!-- /.content -->

<!-- /.content-wrapper -->