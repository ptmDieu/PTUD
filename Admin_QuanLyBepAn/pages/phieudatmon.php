<div class="card-body p-3">
    <table class="table table-striped projects" style="border: 1px solid #bbb;  ">
        <thead class="table-primary">
            <tr>
                <th class="text-center">
                    STT
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
                <th class="text-center">
                    Thời gian
                </th>
                <th class="text-center">
                    Số lượng món
                </th>
                <th class="text-center">
                    Tổng tiền
                </th>
                <th class="text-center">
                    Thao tác
                </th>


            </tr>
        </thead>
        <tbody>

            <?php
            include('classes/orderdishes.php');
            $phieu = new OrderDishes();
            $getOrder = $phieu->getAllOrderDishes();
            if ($getOrder) {
                $stt = 0;
                while ($row = mysqli_fetch_array($getOrder)) {
                    $maPDH = $row['MaPhieuDatMon'];
                    $qty = $phieu->get_Qty($maPDH);
                    $result = mysqli_fetch_array($qty);

                    // echo $maPDH;
                    echo ('
                                    <tr >
                                    <td class ="text-center">
                                        ' . ++$stt . '
                                    </td>
                                    <td  class="text-center">
                                        ' . $row['MaPhieuDatMon'] . '
                                    </td>
                                    <td class="text-center">
                                    ' . $row['MaNV'] . '
                                     </td>
                                    <td class="text-center">
                                    ' . $row['TenNV'] . '
                                        </td>
                                    <td class="text-center">
                                        ' . $row['NgayDat'] . '
                                    </td>
                                    <td class="text-center">
                                        ' . $result['SoMon'] . '
                                    </td>
                                    <td class="text-center">
                                        ' . number_format($row['TongTien'])  . '
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
                echo ('<h4> Chưa có phiếu đặt món nào!</h4>');
            }

            ?>



        </tbody>
    </table>
</div>
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Chi tiết phiếu đặt món:</h5>
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
<script>
</script>