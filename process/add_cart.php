<?php
session_start();
include_once('../class/giohang.php');
$cart = new Cart();
$cart->add_to_cart($_POST['MaMonAn'], $_POST['SoLuong']);
