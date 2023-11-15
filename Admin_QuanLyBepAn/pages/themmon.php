<?php
require_once('./classes/food.php');
$food = new Food();
if (isset($_POST['them'])) {
    if ($food->addFood($_POST, $_FILES['file'])) {
        echo '
            <div class="alert">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                <strong>Title!</strong> Thêm món ăn thành công!
            </div>';
    } else {
        echo '
            <div class="alert">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                <strong>Title!</strong> Thêm món ăn thất bại!
            </div>';
    }
}




?>


<section class="content-header">
    <h1 style="text-align: center;">
        Thêm món ăn
    </h1>
    <!-- <ol class="breadcrumb">
        <li>
            <a href="./index.php"><i class="fa fa-dashboard">Trang chủ</i></a>
        </li>
        <li class="active"> /Thêm món ăn</li>
    </ol> -->
</section>
<form action="" method="post" class="" style=" padding:50px" enctype="multipart/form-data">
    <div class="form-group">
        <label class="sr-only" for="inputName">Hidden input label</label>
        <input type="text" class="form-control sr-only" name="id" value="" id="inputName">
    </div>
    <div class="form-group">
        <label for="">Tên món ăn:</label>
        <input type="text" class="form-control" name="tenmon" id="" aria-describedby="helpId" value="" placeholder="Nhập tên món ăn" required>
        <small id="helpId" class="form-text text-muted">Help text</small>
    </div>
    <div class="form-group">
        <label for="">Thành phần</label>
        <input type="text" class="form-control" name="thanhphan" id="" aria-describedby="helpId" placeholder="Thành phần của món ăn" value="" required>
        <small id="helpId" class="form-text text-muted">Help text</small>
    </div>
    <div class="form-group">
        <label for="">Mô tả</label>
        <input type="text" class="form-control" name="mota" id="" aria-describedby="helpId" placeholder="Mô tả món ăn" value="" required>
        <small id="helpId" class="form-text text-muted">Help text</small>
    </div>
    <div class="form-group">
        <label for="">Giá bán</label>
        <input type="text" class="form-control" name="gia" id="" aria-describedby="helpId" placeholder="Giá muốn bán" value="" required>
        <small id="helpId" class="form-text text-muted">Help text</small>
    </div>
    <div class="form-group">
        <label for="">Chi phí</label>
        <input type="text" class="form-control" name="chiphi" id="" aria-describedby="helpId" placeholder="Chi phí cho món ăn" value="">
        <small id="helpId" class="form-text text-muted">Help text</small>
    </div>
    <div class="form-group">
        <label for="">Hình ảnh</label>
        <input type="file" class="form-control-file" name="file" id="" placeholder="" aria-describedby="fileHelpId">
        <small id="fileHelpId" class="form-text text-muted">Help text</small>
    </div>

    <div class="form-group">
        <label for="">Loại sản phẩm</label>
        <select class="form-control" name="loai" id="">
            <?php
            include('./classes/category.php');
            $c = new Loaimonan();
            $category = $c->getAllCategory();
            while ($row = mysqli_fetch_array($category)) {
                echo ('
                <option value="' . $row['MaLoai'] . '" >' . $row['TenLoai'] . '</option>
                ');
            }


            ?>

            <!-- <option value="1" selected>Món chính</option>
            <option value="2">Món canh</option>
            <option value="3">Món tráng miệng</option> -->
        </select>
    </div>
    <button type="submit" name="them" class="btn btn-primary">Thêm món ăn</button>

</form>