<div class="row mt-3">
    <span class="title-mon-an"> ĐỀ XUẤT CỦA BẠN</span>
</div>
<!-- <div class="spacer"></div> -->
<div class="container  mt-3">
    <h5 class="text-center p-3" style="font-weight: bold;">DANH SÁCH CÁC ĐỀ XUẤT</h5>

    <table class="table table-striped">
        <thead>
            <tr class="table-primary">
                <th class="text-center">STT</th>
                <th>Món đề xuất</th>
                <th>Ngày đề xuất</th>
                <th>Ghi chú</th>
            </tr>
        </thead>
        <tbody>
            <?php
            include('class/cl_dexuat.php');
            $re = new Recommend;
            if (!isset($_SESSION['MaNV'])) {
                echo (" <h4 class='text-center' >Vui lòng đăng nhập để sử dụng chức năng này!</h4> ");
            } else {
                $kqua  = $re->getAllRecommend($_SESSION['MaNV']);
                $stt = 0;
                while ($row = mysqli_fetch_array($kqua)) {
                    echo ('
                <tr>
                    <td>' . ++$stt . '</td>
                    <td>' . $row['MonDeXuat'] . '</td>
                    <td>' . $row['NgayDeXuat'] . '</td>
                    <td>' . $row['GhiChu'] . '</td>
                 </tr>
                
                
                ');
                }
            }


            ?>


        </tbody>


    </table>


</div>