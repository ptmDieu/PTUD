<?php
require_once('./classes/food.php');
$food = new Food();
if (!empty($_POST)) {
    if ($food->updateFood($_POST, $_FILES['file'])) {
        echo '
            <div class="alert">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                <strong>Title!</strong> Cập nhật món ăn thành công!
            </div>';
    } else {
        echo '
            <div class="alert">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                <strong>Title!</strong> Cập nhật món ăn thất bại!
            </div>';
    }
}

$dish = "";
if (isset($_GET['id'])) {
    $dish = $food->getDishByID($_GET['id']);
    $dish = mysqli_fetch_assoc($dish);
}
?>







<section class="content-header">
    <h1 style="text-align: center;">
        Cập nhật thông tin món ăn
    </h1>
    <!-- <ol class="breadcrumb">
        <li>
            <a href="./index.php"><i class="fa fa-dashboard">Trang chủ</i></a>
        </li>
        <li class="active"> /Thêm món ăn</li>
    </ol> -->
</section>
<form action="" method="post" class="" id="formSuaMon" style=" padding:50px" enctype="multipart/form-data">
    <div class="form-group">
        <label class="sr-only" for="inputName">Hidden input label</label>
        <input type="text" class="form-control sr-only" name="id" value="<?php echo $_GET['id']; ?>" id="inputName">
    </div>
    <div class="form-group">
        <label for="">Tên món ăn:</label>
        <input type="text" class="form-control" name="tenmon" id="tenMon" aria-describedby="helpId" value="<?php echo $dish['TenMonAn']; ?>" placeholder="Nhập tên món ăn" required>
        <small id="erTen" class="form-text "></small>
    </div>
    <div class="form-group">
        <label for="">Thành phần</label>
        <input type="text" class="form-control" name="thanhphan" id="thanhPhan" aria-describedby="helpId" placeholder="Thành phần của món ăn" value="<?php echo $dish['ThanhPhan']; ?>" required>
        <small id="erThanhPhan" class="form-text "></small>
    </div>
    <div class="form-group">
        <label for="">Mô tả</label>
        <input type="text" class="form-control" name="mota" id="moTa" aria-describedby="helpId" placeholder="Mô tả món ăn" value="<?php echo $dish['MoTa']; ?>" required>
        <small id="erMoTa" class="form-text "></small>
    </div>
    <div class="form-group">
        <label for="">Giá bán</label>
        <input type="text" class="form-control" name="gia" id="Gia" aria-describedby="helpId" placeholder="Giá muốn bán" value="<?php echo ($dish['GiaTien']); ?>" required>
        <small id="erGia" class="form-text "></small>
    </div>
    <div class="form-group">
        <label for="">Chi phí</label>
        <input type="text" class="form-control" name="chiphi" id="chiPhi" aria-describedby="helpId" placeholder="" value="<?php echo ($dish['ChiPhi']); ?>">
        <small id="erChiPhi" class="form-text "></small>
    </div>
    <div class="form-group">
        <label for="">Hình ảnh</label>
        <input type="file" class="form-control-file" name="file" id="img" placeholder="" aria-describedby="fileHelpId">
        <small id="fileHelpId" class="form-text "></small>
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
    <button type="submit" name="update" class="btn btn-primary">Lưu</button>

</form>
<script src="dist/js/validate.js"></script>
<script>
    Validator({
        form: '#formSuaMon',
        errorSelector: '.form-text',
        rules: [
            Validator.isRequired('#tenMon'),
            Validator.isRequired('#thanhPhan'),
            Validator.isRequired('#moTa'),
            Validator.isRequired('#Gia'),
            Validator.isNumber('#Gia'),
            Validator.checkCost('#chiPhi', function() {
                return document.querySelector('#formSuaMon #Gia').value;
            })

        ]
    });
</script>