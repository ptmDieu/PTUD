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
        $getMenu = $menu->getMenuById($getDate);
        // var_dump($getMenu);

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