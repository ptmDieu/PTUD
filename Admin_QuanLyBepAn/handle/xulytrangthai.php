<?php
include_once('../classes/food.php');
$change = new Food();

if ($_POST['id'] != "" && $_POST['value'] != "") {
    if ($changeSt = $change->updateStatus($_POST['id'], $_POST['value'])) {
        echo "Đổi trạng thái thành công";
    } else {
        echo "Đổi trạng thái thất bại";
    }
}
