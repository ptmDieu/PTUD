<?php
include('../classes/orderdishes.php');
$order = new  OrderDishes();
if ($_POST['act'] == 'PDM') {
    $pdm = $order->getOrderByID($_POST['mapdm']);
    while ($row = mysqli_fetch_array($pdm)) {
        $thanhtien = $row['SoLuong'] * $row['GiaTien'];
        echo '
            <tr>
                <td>' . $row['TenMonAn'] . '</td>
                <td>' . number_format($row['GiaTien']) . '</td>
                <td>' . $row['SoLuong'] . '</td>
                <td>' . $row['NgayDat'] . '</td>
                <td>' . number_format($thanhtien) . ' VNĐ</td>
            </tr>   
        ';
    }
}
