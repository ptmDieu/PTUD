<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Sunflower | Dashboard</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Tempusdominus Bootstrap 4 -->
  <link rel="stylesheet" href="plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- JQVMap -->
  <link rel="stylesheet" href="plugins/jqvmap/jqvmap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="plugins/daterangepicker/daterangepicker.css">
  <!-- summernote -->
  <link rel="stylesheet" href="plugins/summernote/summernote-bs4.min.css">
</head>

<body class="hold-transition sidebar-mini layout-fixed">

  <div class="wrapper">

    <!-- Preloader -->
    <div class="preloader flex-column justify-content-center align-items-center">
      <img class="animation__shake" src="dist/img/AdminLTELogo.png" alt="AdminLTELogo" height="60" width="60">
    </div>

    <!-- Navbar -->
    <?php
    include('./components/navbar.php');
    ?>
    <!-- /.navbar -->

    <!-- Main Sidebar Container -->
    <?php
    include('./components/sidebar.php');
    ?>
    <!-- xong menu -->

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <div class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">
              <h1 class="m-0">Dashboard</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
              <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="#">Trang chủ</a></li>
                <li class="breadcrumb-item active">Dashboard v1</li>
              </ol>
            </div><!-- /.col -->
          </div><!-- /.row -->
        </div><!-- /.container-fluid -->
      </div>
      <!-- /.content-header -->
      <?php
      $page = isset($_GET['page']) ? $_GET['page'] : "dashboard";

      switch ($page) {
        case "monan":
          include('./pages/monan.php');
          break;
        case "themmon":
          include('./pages/themmon.php');
          break;
        case "ctmonan":
          include('./pages/ctmonan.php');
          break;
        case "update":
          include('./pages/suamonan.php');
          break;
        case "status":
          include('./pages/doitrangthai.php');
          break;
        case "dexuat":
          include('./pages/xemdexuat.php');
          break;
        case "danhgia":
          include('./pages/danhgia.php');
          break;
        default:
          include('./pages/dashbroad.php');
      }
      ?>
      <!-- Main content -->

      <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->

    <?php
    include('./components/footer.php')
    ?>

    <!-- Control Sidebar -->
    <aside class="control-sidebar control-sidebar-dark">
      <!-- Control sidebar content goes here -->
    </aside>
    <!-- /.control-sidebar -->
  </div>
  <!-- ./wrapper -->

  <!-- jQuery -->
  <script src="plugins/jquery/jquery.min.js"></script>
  <!-- jQuery UI 1.11.4 -->
  <script src="plugins/jquery-ui/jquery-ui.min.js"></script>
  <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
  <script>
    $.widget.bridge('uibutton', $.ui.button)
  </script>
  <!-- Bootstrap 4 -->
  <script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
  <!-- ChartJS -->
  <script src="plugins/chart.js/Chart.min.js"></script>
  <!-- Sparkline -->
  <script src="plugins/sparklines/sparkline.js"></script>
  <!-- JQVMap -->
  <script src="plugins/jqvmap/jquery.vmap.min.js"></script>
  <script src="plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
  <!-- jQuery Knob Chart -->
  <script src="plugins/jquery-knob/jquery.knob.min.js"></script>
  <!-- daterangepicker -->
  <script src="plugins/moment/moment.min.js"></script>
  <script src="plugins/daterangepicker/daterangepicker.js"></script>
  <!-- Tempusdominus Bootstrap 4 -->
  <script src="plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
  <!-- Summernote -->
  <script src="plugins/summernote/summernote-bs4.min.js"></script>
  <!-- overlayScrollbars -->
  <script src="plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
  <!-- AdminLTE App -->
  <script src="dist/js/adminlte.js"></script>
  <!-- AdminLTE for demo purposes -->
  <!-- <script src="dist/js/demo.js"></script> -->
  <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
  <script src="dist/js/pages/dashboard.js"></script>
  <script>
    function getValue() {
      var selectStatus = document.getElementById("status");
      var value = selectStatus.value;
      return value;
    }

    function changeStatus(id, value) {
      $.ajax({
        url: 'handle/xulytrangthai.php',
        method: 'POST',
        data: {
          id: id,
          value: value,
        },
        success: (data) => {
          alert(data.trim())
          window.location.reload();
        }

      });
    }

    $(document).on('click', '.mamon', function() {


      if (confirm('Bạn muốn đổi trạng thái món này?')) {

        var id = $(this).data('idmon');
        var status = getValue()
        console.log(id, status);

        changeStatus(id, status);
      }


    });

    function getOrder(mapdm) {
      $.ajax({
        type: "POST",
        url: "./handle/loadorder.php",
        data: {
          mapdm: mapdm,
          act: 'PDM'
        },
        success: function(response) {
          // location.reload();
          $('#detail_order').html(response);
        }
      });
    }

    $(document).on('click', '.detail_order', function() {
      var ma = $(this).data('mapdm');

      getOrder(ma);

    });

    // $.each($('.detail_order'), function(indexInArray, valueOfElement) {
    //   valueOfElement.addEventListener('click', (e) => {
    //     const mapdm = (e.target.dataset.mapdm);
    // $.ajax({
    //       type: "POST",
    //       url: "./handle/loadorder.php",
    //       data: {
    //         mapdm,
    //         act: 'PDM'
    //       },
    //       success: function(response) {
    //         // location.reload();
    //         $('#detail_order').html(response);
    //       }
    //     });

    //   })
    // });
  </script>
</body>

</html>