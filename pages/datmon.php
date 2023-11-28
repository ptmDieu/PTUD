<div class=" container-fluid row mt-3">
  <span class="title-mon-an">ĐẶT MÓN ĂN</span>
</div>
<div class="container mt-3 table-responsive-lg table-responsive-md table-responsive-sm">
  <table class="table">
    <thead class="table-active">
      <tr>
        <th>STT</th>
        <th>Tên Món</th>
        <th>Hình ảnh</th>
        <th>Giá tiền</th>
        <th>Số lượng</th>
        <th>Thành tiền</th>
        <th>Thao tác</th>
      </tr>
    </thead>
    <tbody>
      <?php
      if (!$Cart) {
        echo '<h4 style=" text-align: center; color: red;">Bạn chưa có sản phẩm nào trong giỏ hàng!!!</h4>';
      } else {
        $stt = 0;
        while ($row = mysqli_fetch_array($Cart)) {

          $thanhtien = 0;
          echo ('
              <tr>
                <td>' . ++$stt . '</td>
                <td>' . $row['TenMonAn'] . '</td>
                <td><img src="Admin_QuanLyBepAn/uploads/' . $row['HinhAnh'] . '" style= "height: 70px; width: 70px;" alt="' . $row['TenMonAn'] . '"></td>
                <td>' . number_format($row['GiaTien']) . '</td>
                <td><input class="input-text soluong" type="number" value="' . $row['SoLuong'] . '" data-id="' . $row['MaGioHang'] . '" /></td>
                <td>' . number_format($thanhtien = $row['SoLuong'] * $row['GiaTien']) . ' VND</td>
                <td>
                  <button class="btn-success btn update_cart" data-id =' . $row['MaGioHang'] . '><span>Cập nhật</span></button>
                  <button class="btn-danger btn delete_item" data-id=' . $row['MaGioHang'] . '><span>Xóa</span></button>
                </td>
              </tr>
                
          ');
        }
      }
      ?>
      <tr class="table-info">
        <td colspan="5" class="title-datmon">TỔNG TIỀN</td>
        <td style="color: red; text-align: left;  " class="title-datmon">
          <span id="total">
            <?php
            $total = $giohang->get_total();
            echo (number_format($total));
            ?>
          </span>
          <span>VND</span>
        </td>
        <td>

          <!-- <label for="my-input" class="form-check-label"> <strong>Ghi Chú</strong> </label> -->
          <input id="note" class="form-control" type="text" name="" placeholder="Ghi chú nếu cần!">


        </td>
      </tr>
    </tbody>
  </table>


</div>
<div class="row text-center">
  <div class="">
    <a href="index.php?page=thucdon">
      <button class="btn-add">
        <i class="fa-solid fa-bars" style="font-size: 20px"></i>
        <span>TIẾP TỤC CHỌN MÓN</span>
      </button>
    </a>
    <?php
    if ($Cart) {
      echo ('<button class="btn-add datmon" id="datmon">
      <i class="fa-solid fa-circle-check" style="font-size: 20px"></i>
      <span>ĐẶT MÓN</span>
    </button>');
    }
    ?>

  </div>
</div>
</div>