<?php
$pre_page = 8;
if (isset($_GET['trang'])) {
  $trang  = $_GET['trang'];
} else {
  $trang = 1;
}

if ($trang == "" || $trang == 1) {
  $star = 0;
} else {
  $star = ($trang * $pre_page) - $pre_page;
}

?>

<div class="row">
  <!-- sidebar-menu -->
  <?php
  include('./include/sidebar_menu.php')
  ?>

  <!-- End sidebar -->
  <div class="col-lg-9 col-md-9 col-sm-12">
    <!-- Content món ăn chính -->
    <div class="row">
      <span class="title-mon-an">THỰC ĐƠN HÔM NAY</span>
    </div>

    <section class="section">
      <div class="row p-3">
        <?php
        include('./class/monan.php');
        $getDate = date('Y-m-d');
        // echo $getDate;

        // echo gettype($getDate);
        $menu = new Monan();
        $getMenu = $menu->getMenuById($getDate, $star, $pre_page);
        $maxpage = ceil(($menu->getNumRowMenu($getDate) / $pre_page));

        if ($getMenu) {
          while ($row = mysqli_fetch_array($getMenu)) {
            echo ('
              <div class="col-lg-3 col-md-4 col-sm-6 col-12 mt-3">
                <div class="card">
                  <img class="card-img-top" style="height: 250px;" src="./Admin_QuanLyBepAn/uploads/' . $row['HinhAnh'] . '" alt="Cơm" />
                  <div class="card-body">
                    <h4 class="card-title">' . $row['TenMonAn'] . '</h4>
                    <p class="card-text">' . $row['ThanhPhan'] . '</p>
                    <h4 class="card-title">' . number_format($row['GiaTien']) . '</h4>
                    <a href="?page=ctmonan&id=' . $row['MaMonAn'] . '" class="btn btn-primary">Đặt món</a>
                  </div>
                </div>
              </div>
  
            ');
          }
        } else {
          echo (' <h4 class="text-center" style="color: red;">Hiện tại chưa có thực đơn cho ngày:' . ' ' . $now = date('d-m-y') . '</h4>');
        }



        ?>
        <!-- <div class="col-lg-3 col-md-4 col-sm-6 col-12">
          <div class="card">
            <img class="card-img-top" src="./img/comtam.jpg" alt="Cơm" />
            <div class="card-body">
              <h4 class="card-title">Cơm tấm</h4>
              <p class="card-text">Sườn, bì, chả</p>
              <h4 class="card-title">35.000đ</h4>
              <a href="?page=chitietmon" class="btn btn-primary">Đặt món</a>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-md-4 col-sm-6 col-12">
          <div class="card">
            <img class="card-img-top" src="./img/comtam.jpg" alt="Cơm" />
            <div class="card-body">
              <h4 class="card-title">Cơm tấm</h4>
              <p class="card-text">Sườn, bì, chả</p>
              <h4 class="card-title">35.000đ</h4>
              <a href="?page=chitietmon" class="btn btn-primary">Đặt món</a>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-md-4 col-sm-6 col-12">
          <div class="card">
            <img class="card-img-top" src="./img/comtam.jpg" alt="Cơm" />
            <div class="card-body">
              <h4 class="card-title">Cơm tấm</h4>
              <p class="card-text">Sườn, bì, chả</p>
              <h4 class="card-title">35.000đ</h4>
              <a href="?page=chitietmon" class="btn btn-primary">Đặt món</a>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-md-4 col-sm-6 col-12">
          <div class="card">
            <img class="card-img-top" src="./img/comtam.jpg" alt="Cơm" />
            <div class="card-body">
              <h4 class="card-title">Cơm tấm</h4>
              <p class="card-text">Sườn, bì, chả</p>
              <h4 class="card-title">35.000đ</h4>
              <a href="?page=chitietmon" class="btn btn-primary">Đặt món</a>
            </div>
          </div>
        </div> -->
      </div>
    </section>

    <!-- Content món ăn canh -->

    <!-- <div class="row">
            <span class="title-mon-an">MÓN CANH</span>
          </div>
          <section class="section">
            <div class="row p-3">
              <div class="col-lg-3 col-md-4 col-sm-6 col-12">
                <div class="card">
                  <img
                    class="card-img-top"
                    src="../img/canhchua.jpg"
                    alt="Cơm"
                  />
                  <div class="card-body">
                    <h4 class="card-title">Canh chua cá lóc</h4>
                    <p class="card-text">Cà chua, thơm, rau, cá lóc</p>
                    <h4 class="card-title">35.000đ</h4>
                    <a href="#" class="btn btn-primary">Đặt món</a>
                  </div>
                </div>
              </div>
              <div class="col-lg-3 col-md-4 col-sm-6 col-12">
                <div class="card">
                  <img
                    class="card-img-top"
                    src="../img/canhchua.jpg"
                    alt="Cơm"
                  />
                  <div class="card-body">
                    <h4 class="card-title">Canh chua cá lóc</h4>
                    <p class="card-text">Cà chua, thơm, rau, cá lóc</p>
                    <h4 class="card-title">35.000đ</h4>
                    <a href="#" class="btn btn-primary">Đặt món</a>
                  </div>
                </div>
              </div>
              <div class="col-lg-3 col-md-4 col-sm-6 col-12">
                <div class="card">
                  <img
                    class="card-img-top"
                    src="../img/canhchua.jpg"
                    alt="Cơm"
                  />
                  <div class="card-body">
                    <h4 class="card-title">Canh chua cá lóc</h4>
                    <p class="card-text">Cà chua, thơm, rau, cá lóc</p>
                    <h4 class="card-title">35.000đ</h4>
                    <a href="#" class="btn btn-primary">Đặt món</a>
                  </div>
                </div>
              </div>
              <div class="col-lg-3 col-md-4 col-sm-6 col-12">
                <div class="card">
                  <img
                    class="card-img-top"
                    src="../img/canhchua.jpg"
                    alt="Cơm"
                  />
                  <div class="card-body">
                    <h4 class="card-title">Canh chua cá lóc</h4>
                    <p class="card-text">Cà chua, thơm, rau, cá lóc</p>
                    <h4 class="card-title">35.000đ</h4>
                    <a href="#" class="btn btn-primary">Đặt món</a>
                  </div>
                </div>
              </div>
            </div>
          </section> -->
    <!-- Content Món Tráng Miệng -->
    <!-- <div class="row">
            <span class="title-mon-an">MÓN TRÁNG MIỆNG</span>
          </div>
          <section class="section">
            <div class="row p-3">
              <div class="col-lg-3 col-md-4 col-sm-6 col-12">
                <div class="card">
                  <img
                    class="card-img-top"
                    src="../img/suachua.jpg"
                    alt="sữa chua"
                  />
                  <div class="card-body">
                    <h4 class="card-title">Sữa chua trái cây</h4>
                    <p class="card-text">Sữa chua, trái cây</p>
                    <h4 class="card-title">15.000đ</h4>
                    <a href="#" class="btn btn-primary">Đặt món</a>
                  </div>
                </div>
              </div>
              <div class="col-lg-3 col-md-4 col-sm-6 col-12">
                <div class="card">
                  <img
                    class="card-img-top"
                    src="../img/suachua.jpg"
                    alt="sữachua"
                  />
                  <div class="card-body">
                    <h4 class="card-title">Sữa chua trái cây</h4>
                    <p class="card-text">Sữa chua, trái cây</p>
                    <h4 class="card-title">15.000đ</h4>
                    <a href="#" class="btn btn-primary">Đặt món</a>
                  </div>
                </div>
              </div>
              <div class="col-lg-3 col-md-4 col-sm-6 col-12">
                <div class="card">
                  <img
                    class="card-img-top"
                    src="../img/suachua.jpg"
                    alt="sữachua"
                  />
                  <div class="card-body">
                    <h4 class="card-title">Sữa chua trái cây</h4>
                    <p class="card-text">Sữa chua, trái cây</p>
                    <h4 class="card-title">15.000đ</h4>
                    <a href="#" class="btn btn-primary">Đặt món</a>
                  </div>
                </div>
              </div>

              <div class="col-lg-3 col-md-4 col-sm-6 col-12">
                <div class="card">
                  <img
                    class="card-img-top"
                    src="../img/suachua.jpg"
                    alt="sữachua"
                  />
                  <div class="card-body">
                    <h4 class="card-title">Sữa chua trái cây</h4>
                    <p class="card-text">Sữa chua, trái cây</p>
                    <h4 class="card-title">15.000đ</h4>
                    <a href="#" class="btn btn-primary">Đặt món</a>
                  </div>
                </div>
              </div>
            </div>
          </section> -->
  </div>
</div>

<div class="list">
  <span>Trang:</span>
  <ul>
    <!-- <li><a href="#">1</a></li>
        <li><a href="#">2</a></li>
        <li><a href="#">3</a></li> -->
    <?php
    for ($i = 1; $i <= $maxpage; $i++) {
      echo '<li';
      // Kiểm tra nếu đây là trang hiện tại, thêm class active
      if ($i == $trang) {
        echo ' class="active"';
      }
      echo '><a href="index.php?page=thucdon&trang=' . $i . '">' . $i . '</a></li>';
    }
    ?>

  </ul>
</div>