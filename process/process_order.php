<?php
include('../class/giohang.php');
include('../class/dishorder.php');
include('../class/cl_dexuat.php');
$crt = new Cart();
$cart = $crt->getAll();
$od = new OrderDishes();

$dx = new Recommend;


if (isset($_POST['maNV']) && $_POST['act'] == "datmon") {

    if ($order = $crt->add_Order($_POST['maNV'], $_POST['tongtien'], $cart, $_POST['ghichu'])) {
        echo ('Đã đặt món!');
    } else {
        echo ('Đặt món thất bại!');
    }
}


if (isset($_POST['idphieu']) && $_POST['act'] == 'huymon') {
    if ($cancel = $od->cancelOrder($_POST['idphieu'])) {
        echo ('Đã hủy phiếu đặt món!');
    } else {
        echo ('Hủy phiếu thất bại');
    }
}

if (isset($_POST['idnv']) && $_POST['act'] == "guidexuat") {
    if ($dexuat = $dx->addRecommend($_POST['idnv'], $_POST['monan'], $_POST['ghichu'])) {
        echo ("Đã gửi đề xuất của bạn");
    } else {
        echo ("Lỗi");
    }
}
