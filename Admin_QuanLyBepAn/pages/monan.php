<?php
include('./classes/food.php');
$f = new Food();
$foods = $f->getAll();
// var_dump($foods);

?>
<div class="card-body p-0">
    <table class="table table-striped projects">
        <thead>
            <tr>
                <th style="width: 1%">
                    #
                </th>
                <th style="width:20%">
                    Tên món ăn
                </th>
                <th style="width: 15%">
                    Hình ảnh
                </th>
                <th style="width: 15%">
                    Giá bán
                </th>
                <th style="width: 15%">
                    Loại Món Ăn
                </th>
                <th style="width: 15%">
                    Trạng thái
                </th>
                <th style="width: 25%">
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
            if ($foods) {
                while ($row = mysqli_fetch_array($foods)) {
                    $trangthai = $row['TrangThai']  == 1 ? "Đang kinh doanh" : "Ngừng kinh doanh";
                    if ($trangthai == "Ngừng kinh doanh") {
                        echo '
                            <tr class="bg-warning">
                                <td>' . $row['MaMonAn'] . '</td>
                                <td>' . $row['TenMonAn'] . '</td>
                                <td>
                                    <img src="uploads/' . $row['HinhAnh'] . '" width="80px"/>
                                </td>
                                <td>' . number_format($row['GiaTien'])  . '</td>
                                
                                <td>' . $row['TenLoai'] . '</td>
                                <td>' .  $trangthai . '</td>
                                <td>
                                        <div>
                                            <a class="btn btn-primary btn-sm" href="?page=ctmonan&id=' . $row['MaMonAn'] . '">
                                                <i class="fas fa-info">
                                                </i>
                                                Xem
                                            </a>
                                            <a class="btn btn-info btn-sm" href="?page=update&id=' . $row['MaMonAn'] . '">
                                                <i class="fas fa-pencil-alt">
                                                </i>
                                                Sửa
                                            </a>
                                            <a class="btn btn-danger btn-sm" href="?page=status&id=' . $row['MaMonAn'] . '">
                                                <i class="fas fa-trash">
                                                </i>
                                                Đổi trạng thái
                                            </a>
                                    </div>
                                </td>
                            </tr>
                        ';
                    } else {
                        echo '
                            <tr class="">
                                <td>' . $row['MaMonAn'] . '</td>
                                <td>' . $row['TenMonAn'] . '</td>
                                <td>
                                    <img src="../Admin_QuanLyBepAn/uploads/' . $row['HinhAnh'] . '" width="80px"/>
                                </td>
                                <td>' . $row['GiaTien'] . '</td>
                                <td>' . $row['TenLoai'] . '</td>
                                <td>' .  $trangthai . '</td>
                                <td>
                                        <div>
                                            <a class="btn btn-primary btn-sm" href="?page=ctmonan&id=' . $row['MaMonAn'] . '">
                                                <i class="fas fa-info">
                                                </i>
                                                Xem
                                            </a>
                                            <a class="btn btn-info btn-sm" href="?page=update&id=' . $row['MaMonAn'] . '">
                                                <i class="fas fa-pencil-alt">
                                                </i>
                                                Sửa
                                            </a>
                                            <a class="btn btn-danger btn-sm" href="?page=status&id=' . $row['MaMonAn'] . '">
                                                <i class="fas fa-trash">
                                                </i>
                                                Đổi trạng thái
                                            </a>
                                    </div>
                                </td>
                            </tr>
                        ';
                    }
                }
            }
            ?>


        </tbody>
    </table>
</div>