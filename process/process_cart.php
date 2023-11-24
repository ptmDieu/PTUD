<?php
require('../class/giohang.php');
$cart = new Cart();

if (isset($_POST['idCart']) && $_POST['act'] == 'delete') {
    if ($cart->delete_dish_cart($_POST['idCart'])) {
        echo ($cart->get_quantity_product_cart());
    } else {
        echo ("Xóa sản phẩm thất bại");
    }
}
if (isset($_POST['mamonan']) && $_POST['act'] == 'update_cart') {
    if ($cart->update_cart($_POST['mamonan'], $_POST['qty'])) {

        echo ($cart->get_total());
    } else {
        echo ("Cập nhật sản phẩm thất bại");
    }
}


if (isset($_POST['makh']) && $_POST['act'] == 'delete_all') {
    if ($cart->delete_all($_POST['makh'])) {
        echo ($cart->get_quantity_product_cart());
    } else {
        echo ("Xóa sản phẩm thất bại");
    }
}
