<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"/>
    <link rel="stylesheet" href="style.css">

    <style>

        .sidebar {
            position: fixed;
            width: 250px;
            height: 100%;
            background-color: #fcdd13;
            top: 0;
            left: -250px; /* Initially hide the sidebar off-screen */
            padding: 15px;
            transition: left 0.3s;
        }

        .sidebar a {
            padding: 8px 16px;
            text-decoration: none;
            color: #000000;
            display: block;
        }

        .sidebar a:hover {
            background-color: #050505;
            color: #fedc00;
        }
        .page-title {
            background-color: #fcdd13;
            color: #000;
            text-align: center;
            padding: 10px 0;
            font-size: 18px;
        }
        .toggle-sidebar {
            background-color: #fedc00; /* Change button background color to yellow */
            color: #000; /* Change button text color to black */
            position: absolute; /* Position the button absolutely within the main content */
            top: 0;
            left: 0;
            z-index: 1; /* Place button above the image */
            border-color: #fedc00;
        }

        /* Add media query for responsiveness */
        @media (max-width: 768px) {
            .sidebar {
                left: 0; /* Show the sidebar on smaller screens */
            }
        }
    </style>
</head>
<body>
<div class="sidebar">
    <img src="logo.png" alt="Logo" width="100" height="100">
    <a><img src="admin.png" alt="Logo" width="65" height="40">Admin</a>
    <a href="#">Đăng xuất</a>
    <a href="./quanlybep.html">Trang chủ</a>
    <a href="#">Thực đơn</a>
    <a href="#" class="dropdown-toggle" data-toggle="dropdown">Chức năng</a>
    <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
        <a class="dropdown-item" href="#">Xác nhận thông tin nguyên vật liệu</a>
        <a class "dropdown-item" href="#">Xem danh sách thực đơn</a>
        <a class="dropdown-item" href="#">Xác nhận số lượng phần ăn</a>
    </div>
    <a href="#">Giới thiệu</a>
    <a href="#">Liên hệ</a>
    <a href="#">Trợ giúp</a>
</div>

<main class="main-content">
    <div class="page-title">PHẦN MỀM QUẢN LÝ BẾP ĂN</div>
    <button class="toggle-sidebar btn btn-primary" onclick="Menu()">Menu</button>
    <img src="./anh.png" alt="Ảnh lớn" style="width: 100%; height: auto;">
</main>

<!-- Link to Bootstrap JS and your custom JavaScript -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<script>
    function Menu() {
        const sidebar = document.querySelector('.sidebar');
        sidebar.style.left = (sidebar.style.left === '0px' || sidebar.style.left === '') ? '-250px' : '0px';
    }
</script>
</body>
</html>
