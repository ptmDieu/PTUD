<div class="row mt-3">
    <span class="title-mon-an">BẢNG CÔNG NỢ</span>
</div>
<div class="container-fluid mt-3 table-responsive-lg table-responsive-md table-responsive-sm mb-5">
    <?php



    ?>
    <table class="table table-striped">
        <thead>
            <tr class="table-primary">
                <th class="text-center">STT</th>
                <th class="text-center">Mã phiếu đặt món</th>
                <th class="text-center">Thời gian</th>
                <th class="text-center">Trạng thái phiếu</th>
                <th class="text-center">Tổng tiền</th>
                <th>Thao tác</th>
            </tr>
        </thead>
        <tbody>
            <?php
            include('class/dishorder.php');
            $p = new OrderDishes();

            if (!isset($_SESSION['MaNV'])) {

                echo (" <h4 class='text-center' >Vui lòng đăng nhập để sử dụng chức năng này!</h4> ");
            } else {
                $stt = 0;
                $congno = 0;



                $pdm = $p->getOrderSucces($_SESSION['MaNV']);
                while ($row = mysqli_fetch_array($pdm)) {
                    $congno += $row['TongTien'];
                    $sl = $p->get_Qty($row['MaPhieuDatMon']);
                    $result = mysqli_fetch_array($sl);
                    $qty = $result['SoMon'];
                    echo ('
            <tr>
                <td class="text-center" >' . ++$stt . '</td>
                <td class="text-center">' . $row['MaPhieuDatMon'] . '</td>
                <td class="text-center">' . $row['NgayDat'] . '</td>
           <td class="text-center">' . $row['TenTrangThai'] . '</td>
                <td class="text-center">' . number_format($row['TongTien']) . '</td>
                    
           <td>
                  <a href="?page=ct-pdm&id=' . $row['MaPhieuDatMon'] . '"><button class="btn-primary btn">
                      <span>Xem phiếu</span>
                    </button></a>
                </td>
            </tr>
            
            ');
                }
            }


            ?>

        </tbody>

        <tbody class="table-warning">
            <tr>
                <td colspan="2" class=" text-left text-danger "> <strong>Tổng số phiếu đã đặt:</strong> <strong><?php echo $stt; ?></strong></td>
                <td colspan="2" class=" text-center text-danger "> <strong>Tổng số tiền đã thanh toán:</strong> <strong><?php echo 0 ?></strong> </td>
                <td colspan="2" class=" text-right text-danger "> <strong>Tổng công nợ:</strong> <strong><?php echo (number_format($congno)); ?> VNĐ</strong></td>

            </tr>
        </tbody>

    </table>
</div>