<?php
include('./classes/recommend.php');
$dexuat = new Recommend();
$ketqua = $dexuat->getRecommend();


?>
<div class="card-body p-0">
    <table class="table table-striped projects">
        <thead>
            <tr>
                <th style="width: 1%">
                    #
                </th>
                <th style="width: 20%">
                    Mã nhân viên
                </th>
                <th style="width:20%">
                    Tên nhân viên
                </th>
                <th style="width: 15%">
                    Món ăn đề xuất
                </th>
                <th style="width: 15%">
                    Ngày đề xuất
                </th>

                <th style="width: 15%">
                    Ghi chú
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
                    echo ('
                <tr>
                   <td>
                       ' . $row['MaPhieuDeXuat'] . '
                   </td>
                   <td>
                       ' . $row['MaNV'] . '
                   </td>
                   <td class="">
                   ' . $row['TenNV'] . '
                    </td>
                   <td>
                       ' . $row['MonDeXuat'] . '
                   </td>
                   <td>
                   ' . $row['NgayDeXuat'] . '
                   </td>
                   <td class="">
                   ' . $row['GhiChu'] . '
                   </td>
                  
                   
               </tr>    
                   
                   ');
                }
            } else {
                echo ('<h4> Chưa có đề xuất món mới nào!</h4>');
            }

            ?>



        </tbody>
    </table>
</div>