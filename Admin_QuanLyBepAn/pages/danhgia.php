<?php
require_once('./classes/feedback.php');
$fb = new FeedBack();
$ketqua = $fb->getFeedback();


?>
<div class="card-body p-0">
    <table class="table table-striped projects">
        <thead class="table-primary">
            <tr>
                <th class="text-center">
                    Mã đánh giá
                </th>
                <th class="text-center">
                    Mã phiếu đặt món
                </th>
                <th class="text-center">
                    Mã nhân viên
                </th>
                <th class="text-center">
                    Tên nhân viên
                </th>
                <th class="text-left ml-5">
                    Đánh giá món ăn
                </th>

                <th class="text-center">
                    Thao tác
                </th>

            </tr>
        </thead>
        <tbody>
            <!-- <tr>
                <td>
                    01
                </td>
                <td>
                    Thịt kho tàu
                </td>
                <td>
                    <img src="uploads/thit-kho-tau.jpg" style="width: 80px; height: 80px;" alt="thịt kho tàu">
                </td>
                <td>
                    25.000
                </td>
                <td class="">
                    Món chính
                </td>
                <td class="">
                    Đang kinh doanh.
                </td>
                <td class="project-actions text-right">
                    <div>
                        <a class="btn btn-primary btn-sm" href="#">
                            <i class="fas fa-info">
                            </i>
                            Xem chi tiết
                        </a>
                        <a class="btn btn-info btn-sm" href="#">
                            <i class="fas fa-pencil-alt">
                            </i>
                            Sửa
                        </a>
                        <a class="btn btn-danger btn-sm" href="#">
                            <i class="fas fa-trash">
                            </i>
                            Xóa
                        </a>
                    </div>
                </td>
            </tr> -->
            <?php
            if ($ketqua) {
                while ($row = mysqli_fetch_array($ketqua)) {
                    $maPDH = $row['MaPhieuDatMon'];
                    // echo $maPDH;
                    echo ('
                <tr>
                   <td class ="text-center">
                       ' . $row['MaPhieuDanhGia'] . '
                   </td>
                   <td class="text-center">
                       ' . $row['MaPhieuDatMon'] . '
                   </td>
                   <td class="text-center"> 
                   ' . $row['MaNV'] . '
               </td>
                   <td class="text-center">
                   ' . $row['TenNV'] . '
                    </td>
                   <td class="text-left ml-5">
                       ' . $row['DanhGia'] . '
                   </td>
                   <td class="text-center">
                   <button type="button" class="btn btn-primary detail_order" data-toggle="modal" data-maPDM=' . $maPDH . ' data-target="#exampleModal">
                           Chi tiết
                   </button>
               </td>
                  
                   
               </tr>    
                   
                   ');
                }
            } else {
                echo ('<h4> Chưa có đánh giá!</h4>');
            }

            ?>



        </tbody>
    </table>
</div>

<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Chi tiết phiếu đặt món:<?php echo " " . $maPDH ?></h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="table-responsive">
                    <table class="table table-hover ">
                        <thead>
                            <tr>
                                <th class="text-center">Tên Món ăn</th>
                                <th class="text-center">Giá bán</th>
                                <th class="text-center">Số phần</th>
                                <th class="text-center">Ngày đặt</th>
                                <th class="text-center">
                                    Thành tiền
                                </th>
                            </tr>
                        </thead>
                        <tbody id="detail_order">

                        </tbody>
                    </table>
                </div>

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <!-- <button type="button" class="btn btn-primary">Save changes</button> -->
            </div>
        </div>
    </div>
</div>