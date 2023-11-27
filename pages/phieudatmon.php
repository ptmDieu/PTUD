<div class="row mt-3">
  <span class="title-mon-an">DANH SÁCH PHIẾU ĐẶT MÓN</span>
</div>
<div class="container-fluid mt-3 table-responsive-lg table-responsive-md table-responsive-sm">
  <?php



  ?>
  <table class="table table-striped">
    <thead>
      <tr class="table-primary">
        <th class="text-center">STT</th>
        <th class="text-center">Mã phiếu đặt món</th>
        <th class="text-center">Thời gian</th>
        <th class="text-center">Số lượng món</th>
        <th class="text-center">Tổng tiền</th>
        <th class="text-center">Trạng thái phiếu</th>
        <th class="text-center">Ghi chú</th>
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

        $pdm = $p->getOrderByNV($_SESSION['MaNV']);
        while ($row = mysqli_fetch_array($pdm)) {
          $sl = $p->get_Qty($row['MaPhieuDatMon']);
          $result = mysqli_fetch_array($sl);
          $qty = $result['SoMon'];
          echo ('
            <tr>
                <td class="text-center" >' . ++$stt . '</td>
                <td class="text-center">' . $row['MaPhieuDatMon'] . '</td>
                <td class="text-center">' . $row['NgayDat'] . '</td>
                <td class="text-center" >' . $qty . '</td>
                <td class="text-center">' . number_format($row['TongTien']) . '</td>
                <td class="text-center">' . $row['TenTrangThai'] . '</td>
                <td class="text-center">' . $row['GhiChu'] . '</td>
                <td>
                  <a href="?page=ct-pdm&id=' . $row['MaPhieuDatMon'] . '"><button class="btn-primary btn">
                      <span>Xem chi tiết</span>
                    </button></a>
                </td>
            </tr>
            
            ');
        }
      }


      ?>

    </tbody>
  </table>
</div>