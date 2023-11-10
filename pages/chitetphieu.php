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
                <span>111111</span>
            </div>
            <div>
                <span>Tên nhân viên:</span>
                <span>Nguyễn Quang Hà</span>
            </div>
        </div>
        <div class="col-lg-6 col-md-6 col-sm-12">
            <div>
                <span>Thời gian đặt:</span>
                <span>11:49 PM - 1x/11/2023</span>
            </div>
            <div><span>Trạng thái phiếu: Đã giao món</span></div>
        </div>
    </div>
</div>
<div class="container mt-3 table-responsive-lg table-responsive-md table-responsive-sm">
    <div class="row text-center mt-3">
        <h5 class="title_info">CHI TIẾT PHIẾU</h5>
    </div>
    <table class="table table-striped">
        <thead>
            <tr>
                <th>STT</th>
                <th>Tên món ăn</th>
                <th>Hình ảnh</th>
                <th>Giá bán</th>
                <th>Số lượng</th>
                <th>Thành tiền</th>
                <!-- <th>Thao tác</th> -->
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>01</td>
                <td>Thịt luộc</td>
                <td>
                    <img src="../uploads/thit-luoc.jpg" alt="thit-luoc" style="width: 80px; height: 80px" />
                </td>
                <td>25.000</td>
                <td>1</td>
                <td>25.000</td>
                <!-- <td>
                            <a href="./chitetphieu.html"><button class="btn-danger btn">
                                    <span>Xóa</span>
                                </button></a>
                        </td> -->
            </tr>
            <tr>
                <td>02</td>
                <td>Canh khổ qua</td>
                <td>
                    <img src="../uploads/canh-kho-qua-nhoi-thit.jpg" alt="canh-kho-qua-nhoi-thit" style="width: 80px; height: 80px" />
                </td>
                <td>25.000</td>
                <td>1</td>
                <td>25.000</td>
                <!-- <td>
                            <a href="./chitetphieu.html"><button class="btn-danger btn">
                                    <span>Xóa</span>
                                </button></a>
                        </td> -->
            </tr>
            <tr>
                <td colspan="4">TỔNG</td>
                <td>2</td>
                <td colspan="">50.000</td>
            </tr>
        </tbody>
    </table>
</div>
<div class="row text-center">
    <div class="">
        <button class="btn-add" data-bs-toggle="modal" data-bs-target="#myModal">
            <i class="fa-solid fa-star" style="font-size: 20px"></i>
            <span>ĐÁNH GIÁ</span>
        </button>
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
                <button type="button" class="btn btn-success" data-bs-dismiss="modal">Lưu</button>
            </div>

        </div>
    </div>
</div>