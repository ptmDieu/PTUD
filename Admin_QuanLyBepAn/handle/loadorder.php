<?php
include('../classes/orderdishes.php');
$order = new  OrderDishes();
if ($_POST['act'] == 'PDM') {
    $maphieu = $_POST['mapdm'];
    $pdm = $order->getOrderByID($_POST['mapdm']);
    while ($row = mysqli_fetch_array($pdm)) {
        $thanhtien = $row['SoLuong'] * $row['GiaTien'];

        echo '
            <tr>
                <td class="text-center" >' . $row['TenMonAn'] . '</td>
                <td>' . number_format($row['GiaTien']) . '</td>
                <td class="text-center">' . $row['SoLuong'] . '</td>
                <td class="text-center">' . $row['NgayDat'] . '</td>
                <td class="text-center">' . number_format($thanhtien) . ' VNĐ</td>
            </tr>   
        ';
    }
}
