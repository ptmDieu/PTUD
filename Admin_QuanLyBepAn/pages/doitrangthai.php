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
                        <select name="" id="status" class="form-control">

                            <option value="1" <?php
                                                if ($result['TrangThai'] == 1) {
                                                    echo ('selected');
                                                }; ?>>Đang kinh doanh</option>
                            <option value="0" <?php
                                                if ($result['TrangThai'] == 0) {
                                                    echo ('selected');
                                                }; ?>>Ngừng kinh doanh</option>
                        </select>
                    </div>
                    <div style=" display: flex; justify-content: center ; align-items: center; ">
                        <button type="submit" class="btn btn-primary mt-3" onClick="deleteProduct(<?php $result['MaMonAn'] ?>);">Cập nhật</button>
                    </div>
                </div>
            </div>

        </div>
        <!-- /.card-body -->
    </div>
    <!-- /.card -->

</section>
<!-- /.content -->

<!-- /.content-wrapper -->