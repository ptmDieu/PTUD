<?php

require_once("./class/dishorder.php");

$id = '';
if (isset($_GET['id'])) {
    $id = $_GET['id'];
}
$detail = new OrderDishes();
$result = $detail->getOrderByID($id);
$result = mysqli_fetch_array($result);
// var_dump($result);
?>



<div class="row mt-3">
    <span class="title-mon-an">CHI TIẾT PHIẾU ĐẶT MÓN</span>
</div>
<div class="container content_pdm mt-3">
    <div class="row mt-3 text-center">
        <span class="title-info">THÔNG TIN PHIẾU ĐẶT MÓN</span>
    </div>
    <div class="row">
        <div class="col-lg-6 col-md-6 col-sm-12">
            <div>
                <span>Mã phiếu đặt món:</span>
                <span> <strong><?php echo $result['MaPhieuDatMon'] ?></strong></span>
            </div>
            <div>
                <span>Tên nhân viên:</span>
                <span><?php echo $result['TenNV'] ?></span>
            </div>
        </div>
        <div class="col-lg-6 col-md-6 col-sm-12">
            <div>
                <span>Thời gian đặt:</span>
                <span> <strong><?php echo $result['NgayDat'] ?></strong> </span>
            </div>
            <div><span>Trạng thái phiếu: <strong <?php if ($result['MaTrangThai'] == 3) {
                                                        echo ('style= "color: red;"');
                                                    } ?>><?php echo $result['TenTrangThai'] ?> </strong></span></div>
        </div>
    </div>
</div>
<div class="container mt-3 table-responsive-lg table-responsive-md table-responsive-sm">
    <div class="row text-center mt-5">
        <h5 class="title_info" style="font-weight:bold ;">CHI TIẾT PHIẾU</h5>
    </div>
    <table class="table table-striped">
        <thead>
            <tr>
                <th class="text-center">STT</th>
                <th>Tên món ăn</th>
                <th>Hình ảnh</th>
                <th class="text-center">Giá bán</th>
                <th class="text-center">Số lượng</th>
                <th class="text-center">Thành tiền</th>
                <!-- <th>Thao tác</th> -->
            </tr>
        </thead>
        <tbody>
            <?php
            $kq = $detail->getOrderByID($id);
            $stt = 0;

            while ($row = mysqli_fetch_array($kq)) {
                $thanhtien = $row['SoLuong'] * $row['GiaTien'];
                echo ('
                    <tr>
                        <td class="text-center">' . ++$stt . '</td>
                        <td>' . $row['TenMonAn'] . '</td>
                        <td>
                            <img src="Admin_QuanLyBepAn/uploads/' . $row['HinhAnh'] . '" alt="thit-luoc" style="width: 80px; height: 80px" />
                        </td>
                        <td class="text-center">' . number_format($row['GiaTien'])  . '</td>
                        <td class="text-center">' . $row['SoLuong'] . '</td>
                        <td class="text-center">' . number_format($thanhtien) . '</td>
                     </tr>

                
                ');
            }

            ?>

            <tr>
                <td colspan="5" style="text-align: center; font-size: 20px; color: red; font-weight: bold;">TỔNG TIỀN </td>
                <td colspan="" style="font-size: 20px; color: red; font-weight: bold;"><?php echo number_format($result['TongTien']) ?> VNĐ</td>
            </tr>
        </tbody>
    </table>
</div>
<div class="row text-center">
    <div class="">

        <?php
        if ($result['MaTrangThai'] == 1) {
            echo ('
                <button class="btn-add huymon" data-idphieu=' . $result['MaPhieuDatMon'] . ' >
                <i class="fa-solid fa-xmark" style="font-size: 20px"></i>
                <span>HỦY PHIẾU</span>
                </button>
            ');
        } else if ($result['MaTrangThai'] == 2) {
            echo ('
                <button class="btn-add" data-bs-toggle="modal" data-bs-target="#myModal">
                <i class="fa-solid fa-star" style="font-size: 20px"></i>
                <span>ĐÁNH GIÁ</span>
                </button>
            ');
        }


        ?>

    </div>
</div>




<!-- The Modal -->
<div class="modal" id="myModal">
    <div class="modal-dialog">
        <div class="modal-content">

            <!-- Modal Header -->
            <div class="modal-header">
                <h4 class="modal-title">ĐÁNH GIÁ MÓN ĂN</h4>
                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
            </div>

            <!-- Modal body -->
            <div class="modal-body">
                <div class="group">
                    <div>
                        <span>Đánh giá của bạn:</span>
                    </div>
                    <div>
                        <input type="text" class="form-control mt-2" placeholder="Nhập đánh giá của bạn tại đây nhé!">
                    </div>
                </div>
            </div>

            <!-- Modal footer -->
            <div class="modal-footer feedback ">
                <button type="button" class="btn btn-success " data-bs-dismiss="modal">Lưu</button>
            </div>

        </div>
    </div>
</div>