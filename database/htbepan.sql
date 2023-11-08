-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 08, 2023 at 05:40 PM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `htbepan`
--

-- --------------------------------------------------------

--
-- Table structure for table `chucvu`
--

CREATE TABLE `chucvu` (
  `MaChucVu` int(1) NOT NULL,
  `TenChucVu` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `chucvu`
--

INSERT INTO `chucvu` (`MaChucVu`, `TenChucVu`) VALUES
(1, 'Quản Lý Bếp'),
(2, 'Nhân viên tập đoàn'),
(3, 'Nhân viên bếp'),
(4, 'Nhân viên phục vu');

-- --------------------------------------------------------

--
-- Table structure for table `cthoadon`
--

CREATE TABLE `cthoadon` (
  `MaCTHD` int(10) NOT NULL,
  `MaHoaDon` int(10) NOT NULL,
  `MaPhieuDatMon` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `ctphieudatmon`
--

CREATE TABLE `ctphieudatmon` (
  `MaCTPhieuDatMon` int(10) NOT NULL,
  `MaPhieuDatMon` int(10) NOT NULL,
  `MaMonAn` int(10) NOT NULL,
  `SoLuong` int(5) NOT NULL,
  `GhiChu` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `ctphieudatmon`
--

INSERT INTO `ctphieudatmon` (`MaCTPhieuDatMon`, `MaPhieuDatMon`, `MaMonAn`, `SoLuong`, `GhiChu`) VALUES
(1, 1, 17, 2, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `ctthucdon`
--

CREATE TABLE `ctthucdon` (
  `MaCTThucDon` int(10) NOT NULL,
  `MaThucDon` int(10) NOT NULL,
  `MaMonAn` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `danhgia`
--

CREATE TABLE `danhgia` (
  `MaPhieuDanhGia` int(10) NOT NULL,
  `MaPhieuDatMon` int(10) NOT NULL,
  `MaNV` int(8) NOT NULL,
  `DanhGia` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `dexuatmon`
--

CREATE TABLE `dexuatmon` (
  `MaPhieuDeXuat` int(10) NOT NULL,
  `MaNV` int(8) NOT NULL,
  `MonDeXuat` varchar(255) NOT NULL,
  `NgayDeXuat` date NOT NULL,
  `GhiChu` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `dexuatmon`
--

INSERT INTO `dexuatmon` (`MaPhieuDeXuat`, `MaNV`, `MonDeXuat`, `NgayDeXuat`, `GhiChu`) VALUES
(1, 19508461, 'Cơm Sườn Nướng', '2023-11-08', 'Sườn nướng mật ong á!');

-- --------------------------------------------------------

--
-- Table structure for table `dinhluong`
--

CREATE TABLE `dinhluong` (
  `MaDinhLuong` int(10) NOT NULL,
  `MaMonAn` int(10) NOT NULL,
  `MaNVL` int(10) NOT NULL,
  `DinhLuong` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `dinhluong`
--

INSERT INTO `dinhluong` (`MaDinhLuong`, `MaMonAn`, `MaNVL`, `DinhLuong`) VALUES
(1, 1, 1, 0.2),
(2, 2, 2, 0.1),
(3, 2, 6, 1),
(4, 3, 2, 0.15),
(5, 4, 3, 0.1),
(6, 4, 4, 0.1),
(7, 4, 8, 0.05),
(8, 5, 6, 3),
(9, 6, 5, 0.1),
(10, 6, 2, 0.15),
(11, 8, 2, 0.15),
(12, 8, 23, 0.01),
(13, 9, 7, 0.1),
(14, 9, 24, 0.01),
(15, 9, 8, 0.05),
(16, 10, 25, 0.05),
(17, 10, 21, 0.05),
(18, 11, 20, 0.1),
(19, 11, 21, 0.05),
(20, 12, 9, 0.1),
(21, 13, 10, 0.1),
(22, 7, 27, 0.2),
(23, 7, 18, 0.01),
(24, 7, 19, 0.005),
(25, 15, 2, 0.1),
(26, 15, 17, 0.05),
(27, 16, 12, 0.15),
(28, 16, 18, 0.01),
(29, 16, 19, 0.003),
(30, 17, 2, 0.2),
(31, 18, 13, 0.2),
(32, 19, 2, 0.15),
(33, 19, 14, 0.05),
(34, 20, 12, 0.15),
(35, 20, 15, 0.1),
(36, 21, 16, 1),
(37, 21, 21, 0.05),
(38, 20, 8, 0.02);

-- --------------------------------------------------------

--
-- Table structure for table `hoadon`
--

CREATE TABLE `hoadon` (
  `MaHoaDon` int(10) NOT NULL,
  `MaNV` int(8) NOT NULL,
  `NgayThanhToan` date NOT NULL,
  `TongTien` float NOT NULL,
  `NoiDung` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `loaimonan`
--

CREATE TABLE `loaimonan` (
  `MaLoai` int(5) NOT NULL,
  `TenLoai` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `loaimonan`
--

INSERT INTO `loaimonan` (`MaLoai`, `TenLoai`) VALUES
(1, 'Món chính'),
(2, 'Món canh'),
(3, 'Món tráng miệng');

-- --------------------------------------------------------

--
-- Table structure for table `monan`
--

CREATE TABLE `monan` (
  `MaMonAn` int(10) NOT NULL,
  `TenMonAn` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ThanhPhan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `MoTa` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `HinhAnh` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `GiaTien` float NOT NULL,
  `ChiPhi` float DEFAULT NULL,
  `TrangThai` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '1',
  `LoaiMonAn` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `monan`
--

INSERT INTO `monan` (`MaMonAn`, `TenMonAn`, `ThanhPhan`, `MoTa`, `HinhAnh`, `GiaTien`, `ChiPhi`, `TrangThai`, `LoaiMonAn`) VALUES
(1, 'Cánh gà mắm tỏi', 'Cánh gà', 'Cánh gà mắn tỏi chiên giòn hòa nguyện cùng gia vị tỏi thơm ngon, tạo nên hương vị đặc biệt hấp dẫn.', 'canhgamamtoi.jpg', 25000, 0, '1', 1),
(2, 'Thịt heo kho tàu', 'Thịt heo, trứng gà', 'Là món ăn truyền thống, thơm ngon với thịt heo thơm mềm và nước sốt đậm đà.', 'thit-kho-tau.jpg', 25000, NULL, '1', 1),
(3, 'Heo quay', 'Thịt heo', 'Lớp vỏ bên ngoài giòn tan, lớp thịt bên trong mền ngon.', 'heo-quay.jpg', 27000, NULL, '1', 1),
(4, 'Mực xào', 'Mực, hành tây', 'Mực tươi xào  với rau củ', 'muc-xao.jpg', 27000, NULL, '1', 1),
(5, 'Trứng chiên', 'Trứng gà', 'Trứng chiên là món ăn đơn giản nhưng ngon miệng với trứng gà được chiên giòn ', 'trung-chien.jpg', 20000, NULL, '1', 1),
(6, 'Tôm kho thịt', 'Tôm, thịt heo', '\"Tôm Kho Thịt\" là món ăn ngon với tôm và thịt được nấu trong nước màu caramen và gia vị, tạo ra hương vị đậm đà và thơm ngon.', 'tom-kho-thit.jpg', 25000, NULL, '1', 1),
(7, 'Gà sả ớt', 'Thịt gà, sả và ớt.', 'Nguyên liệu là thịt gà thơm ngon và hương vị đặc trưng của sả, tạo nên món ăn thơm ngon và đậm đà.', 'ga-sa-ot.jpg', 27000, NULL, '1', 1),
(8, 'Thịt kho tiêu', 'Thịt heo, tiêu đen', 'Món thịt kho tiêu thơm ngon với hương vị độc đáo của các loại gia vị.', 'thit-kho-tieu.jpg', 25000, NULL, '1', 1),
(9, 'Canh chua cá lóc', 'Cá lóc, cà chua, nước cốt me', 'Món canh thanh mát và hương vị tươi ngon của canh chua với cá lóc.', 'canh-chua.jpg', 20000, NULL, '1', 2),
(10, 'Canh cải thịt bằm', 'Rau cải, thịt xay', 'Món canh với sự kết hợp giữa rau cải và thịt bằm.', 'canh-cai.jpg', 10000, NULL, '1', 2),
(11, 'Canh khổ qua', 'Khổ qua, thịt xay', 'Món canh thanh đạm và bổ dưỡng, ăn cho qua cái khổ', 'canh-kho-qua-nhoi-thit.jpg', 25000, NULL, '1', 2),
(12, 'Chuối ', 'Chuối tươi 100%', 'Chuối chín, món tráng miệng.', 'chuoi-chin.jpg', 3000, NULL, '1', 3),
(13, 'Dưa hấu', 'Dưa hấu đỏ.', 'Trái cây tươi', 'dua-hau.jpg', 5000, NULL, '1', 3),
(14, 'Sữa chua', 'Sữa chua', 'Sữa chua vinamill', 'sua-chua-vinamilk.jpg', 7000, NULL, '1', 3),
(15, 'Thịt kho dưa chua', 'Thịt heo, dưa chua', 'Món ăn có hương vị đậm đà, có độ chua nhẹ từ dưa chua kết hợp với hương thơm của thịt kho, tạo nên một trải nghiệm ẩm thực độc đáo.', 'thit-kho-dua-cai-chua.jpg', 25000, NULL, '1', 1),
(16, 'Bò xào sả ớt', 'Thịt bò, sả', 'Món ăn bổ dưỡng, đậm đà với sự kết hợp từ sả và ớt tạo nên món ăn thơm ngon.', 'bo-xao-sa-ot.jpg', 30000, NULL, '1', 1),
(17, 'Thịt heo luộc', 'Thịt heo', 'Thịt heo luộc mềm ngon ăn kèm cà pháo mắm tôm', 'thit-luoc.jpg', 25000, NULL, '1', 1),
(18, 'Cá Basa chiên giòn', 'Cá Basa', 'Cá Basa phile tẩm bột chiên gòn.', 'ca-basa-chien.jpg', 20000, NULL, '1', 1),
(19, 'Thịt kho măng', 'Thịt heo, măng', 'Thịt heo kho măng đậm đà rất ngon.', 'thit-kho-mang.jpg', 20000, NULL, '1', 1),
(20, 'Bò xào đậu cove', 'Thịt bò, đậu cove', 'Đậu que và thịt bò thơm ngon, bổ dưỡng, cung cấp đầy đủ năng lượng', 'bo-xao-dau.jpg', 25000, NULL, '1', 1),
(21, 'Đậu hũ sốt cà chua', 'Đậu hũ, cà chua, thịt xay', 'Món ăn hương vị tươi ngon của đậu hủ kết hợp với sốt cà chua đầy hấp dẫn.', 'dau-hu-nhoi-thit.jpg', 25000, NULL, '1', 1);

-- --------------------------------------------------------

--
-- Table structure for table `nguyenvatlieu`
--

CREATE TABLE `nguyenvatlieu` (
  `MaNVL` int(10) NOT NULL,
  `TenNVL` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `DonViTinh` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `GiaThanh` float DEFAULT NULL,
  `GhiChu` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `nguyenvatlieu`
--

INSERT INTO `nguyenvatlieu` (`MaNVL`, `TenNVL`, `DonViTinh`, `GiaThanh`, `GhiChu`) VALUES
(1, 'Cánh gà', 'kg', 95000, 'Bảo quản lạnh'),
(2, 'Thịt heo', 'kg', 135000, 'Bảo quản lạnh'),
(3, 'Mực', 'kg', 185000, NULL),
(4, 'Hành tây', 'kg', 20000, NULL),
(5, 'Tôm sú', 'kg', 150000, NULL),
(6, 'Trứng gà', 'Trái', 3500, 'Dễ bể'),
(7, 'Cá lóc', 'kg', 50000, NULL),
(8, 'Cà chua', 'kg', 15000, NULL),
(9, 'Chuối ', 'kg', 8000, NULL),
(10, 'Dưa hấu', 'kg', 15000, NULL),
(11, 'Sữa chua', 'Hộp', 5000, NULL),
(12, 'Thịt bò', 'kg', 220000, NULL),
(13, 'Cá Basa Phile', 'kg', 80000, NULL),
(14, 'Măng', 'kg', 20000, NULL),
(15, 'Đậu cove', 'kg', 23000, NULL),
(16, 'Đậu hũ', 'Miếng', 3000, NULL),
(17, 'Dưa chua', 'kg', 10000, NULL),
(18, 'Sả cây', 'kg', 1000, NULL),
(19, 'Ớt Hiểm', 'kg', 5000, NULL),
(20, 'Khổ qua', 'kg', 13500, NULL),
(21, 'Thịt xay', 'kg', 129000, NULL),
(22, 'Sườn cốt lết', 'kg', 114000, NULL),
(23, 'Tiêu đen', 'kg', 180000, NULL),
(24, 'Me chua', 'kg', 20000, NULL),
(25, 'Rau cải thìa', 'kg', 7000, NULL),
(26, 'Trứng cút', 'trái', 500, NULL),
(27, 'Thịt gà', 'kg', 100000, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `nhanvien`
--

CREATE TABLE `nhanvien` (
  `MaNV` int(8) NOT NULL,
  `TenNV` varchar(255) NOT NULL,
  `SoDienThoai` varchar(10) NOT NULL,
  `DiaChi` varchar(255) NOT NULL,
  `Email` varchar(255) NOT NULL,
  `MatKhau` varchar(255) NOT NULL,
  `TrangThaiNV` int(1) NOT NULL DEFAULT 1,
  `ChucVu` int(1) NOT NULL DEFAULT 2
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `nhanvien`
--

INSERT INTO `nhanvien` (`MaNV`, `TenNV`, `SoDienThoai`, `DiaChi`, `Email`, `MatKhau`, `TrangThaiNV`, `ChucVu`) VALUES
(19508461, 'Nguyễn Quang Hà', '0987654321', '17 Nguyễn Du, Phường 7, Gò Vấp, Tp Hồ Chí Minh', 'nguyenquangha130901@gmail.com', '2be9bd7a3434f7038ca27d1918de58bd', 1, 2),
(20119711, 'Phùng Mỹ Diệu', '0866482727', '43/10 Lê Đức Thọ, Phường 15, Gò Vấp, Tp Hồ Chí Minh', 'dieuphung.24042002@gmail.com', 'b59c67bf196a4758191e42f76670ceba', 1, 1),
(20119712, 'Nguyễn Lê Ngọc Dương', '0352689574', '123 Quang Trung, Phường 7, Gò Vấp, Tp Hồ Chí Minh', 'duong123@gmail.com', '934b535800b1cba8f96a5d72f72f1611', 1, 4),
(20119714, 'Hoàng Tuấn Anh', '0976658987', '35 Đường số 2, Thống nhất, Phường 16, Gò Vấp, Tp Hồ Chí Minh', 'tuanAnh@gmail.com', 'dbc4d84bfcfe2284ba11beffb853a8c4', 1, 4),
(20119715, 'Phan Võ Minh Thịnh', '0358485827', '25/10 Phan Huy Ích, Phường 17, Gò Vấp, Tp Hồ Chí Minh', 'minhThinh@gmail.com', '6074c6aa3488f3c2dddff2a7ca821aab', 1, 3),
(20119716, 'Lê Nguyễn Nhi', '0971254698', '123 Hiệp Bình Chánh, phường 7 Thủ Đức, Tp Hồ Chí Minh', 'nguyenhi123@gmail.com', 'b59c67bf196a4758191e42f76670ceba', 1, 2),
(20119717, 'Trần Văn bảo ', '0343896657', '', 'tranvanbao77@gmail.com', 'b59c67bf196a4758191e42f76670ceba', 1, 2),
(20119718, 'Phạm Nhật Tân', '0345869874', '43 Nguyễn Phú, Phường 7, Gò Vấp, Tp Hồ Chí Minh', 'nhattan1997@gmail.com', 'b59c67bf196a4758191e42f76670ceba', 1, 2);

-- --------------------------------------------------------

--
-- Table structure for table `phieudatmon`
--

CREATE TABLE `phieudatmon` (
  `MaPhieuDatMon` int(10) NOT NULL,
  `MaNV` int(8) NOT NULL,
  `MaTrangThai` int(5) NOT NULL,
  `NgayDat` datetime NOT NULL,
  `TongTien` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `phieudatmon`
--

INSERT INTO `phieudatmon` (`MaPhieuDatMon`, `MaNV`, `MaTrangThai`, `NgayDat`, `TongTien`) VALUES
(1, 19508461, 1, '2023-11-08 17:26:09', 25000);

-- --------------------------------------------------------

--
-- Table structure for table `thucdon`
--

CREATE TABLE `thucdon` (
  `MaThucDon` int(5) NOT NULL,
  `Ngay` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `trangthaiphieu`
--

CREATE TABLE `trangthaiphieu` (
  `MaTrangThai` int(5) NOT NULL,
  `TenTrangThai` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `trangthaiphieu`
--

INSERT INTO `trangthaiphieu` (`MaTrangThai`, `TenTrangThai`) VALUES
(1, 'Đã đặt món'),
(2, 'Đã nhận món'),
(3, 'Đã hủy món');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `chucvu`
--
ALTER TABLE `chucvu`
  ADD PRIMARY KEY (`MaChucVu`);

--
-- Indexes for table `cthoadon`
--
ALTER TABLE `cthoadon`
  ADD PRIMARY KEY (`MaCTHD`),
  ADD KEY `MaHoaDon` (`MaHoaDon`),
  ADD KEY `MaPhieuDatMon` (`MaPhieuDatMon`);

--
-- Indexes for table `ctphieudatmon`
--
ALTER TABLE `ctphieudatmon`
  ADD PRIMARY KEY (`MaCTPhieuDatMon`),
  ADD KEY `MaMonAn` (`MaMonAn`),
  ADD KEY `MaPhieuDatMon` (`MaPhieuDatMon`);

--
-- Indexes for table `ctthucdon`
--
ALTER TABLE `ctthucdon`
  ADD PRIMARY KEY (`MaCTThucDon`),
  ADD KEY `MaThucDon` (`MaThucDon`),
  ADD KEY `MaMonAn` (`MaMonAn`);

--
-- Indexes for table `danhgia`
--
ALTER TABLE `danhgia`
  ADD PRIMARY KEY (`MaPhieuDanhGia`),
  ADD KEY `MaNV` (`MaNV`),
  ADD KEY `MaPhieuDatMon` (`MaPhieuDatMon`);

--
-- Indexes for table `dexuatmon`
--
ALTER TABLE `dexuatmon`
  ADD PRIMARY KEY (`MaPhieuDeXuat`),
  ADD KEY `MaNV` (`MaNV`);

--
-- Indexes for table `dinhluong`
--
ALTER TABLE `dinhluong`
  ADD PRIMARY KEY (`MaDinhLuong`),
  ADD KEY `MaMonAn` (`MaMonAn`),
  ADD KEY `MaNVL` (`MaNVL`);

--
-- Indexes for table `hoadon`
--
ALTER TABLE `hoadon`
  ADD PRIMARY KEY (`MaHoaDon`),
  ADD KEY `MaNV` (`MaNV`);

--
-- Indexes for table `loaimonan`
--
ALTER TABLE `loaimonan`
  ADD PRIMARY KEY (`MaLoai`);

--
-- Indexes for table `monan`
--
ALTER TABLE `monan`
  ADD PRIMARY KEY (`MaMonAn`),
  ADD KEY `MaLoai` (`LoaiMonAn`);

--
-- Indexes for table `nguyenvatlieu`
--
ALTER TABLE `nguyenvatlieu`
  ADD PRIMARY KEY (`MaNVL`);

--
-- Indexes for table `nhanvien`
--
ALTER TABLE `nhanvien`
  ADD PRIMARY KEY (`MaNV`),
  ADD KEY `ChucVu` (`ChucVu`);

--
-- Indexes for table `phieudatmon`
--
ALTER TABLE `phieudatmon`
  ADD PRIMARY KEY (`MaPhieuDatMon`),
  ADD KEY `MaTrangThai` (`MaTrangThai`),
  ADD KEY `MaNV` (`MaNV`);

--
-- Indexes for table `thucdon`
--
ALTER TABLE `thucdon`
  ADD PRIMARY KEY (`MaThucDon`);

--
-- Indexes for table `trangthaiphieu`
--
ALTER TABLE `trangthaiphieu`
  ADD PRIMARY KEY (`MaTrangThai`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `chucvu`
--
ALTER TABLE `chucvu`
  MODIFY `MaChucVu` int(1) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `cthoadon`
--
ALTER TABLE `cthoadon`
  MODIFY `MaCTHD` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `ctphieudatmon`
--
ALTER TABLE `ctphieudatmon`
  MODIFY `MaCTPhieuDatMon` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `ctthucdon`
--
ALTER TABLE `ctthucdon`
  MODIFY `MaCTThucDon` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `danhgia`
--
ALTER TABLE `danhgia`
  MODIFY `MaPhieuDanhGia` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `dexuatmon`
--
ALTER TABLE `dexuatmon`
  MODIFY `MaPhieuDeXuat` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `dinhluong`
--
ALTER TABLE `dinhluong`
  MODIFY `MaDinhLuong` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT for table `hoadon`
--
ALTER TABLE `hoadon`
  MODIFY `MaHoaDon` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `loaimonan`
--
ALTER TABLE `loaimonan`
  MODIFY `MaLoai` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `monan`
--
ALTER TABLE `monan`
  MODIFY `MaMonAn` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `nguyenvatlieu`
--
ALTER TABLE `nguyenvatlieu`
  MODIFY `MaNVL` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `nhanvien`
--
ALTER TABLE `nhanvien`
  MODIFY `MaNV` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20119719;

--
-- AUTO_INCREMENT for table `phieudatmon`
--
ALTER TABLE `phieudatmon`
  MODIFY `MaPhieuDatMon` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `thucdon`
--
ALTER TABLE `thucdon`
  MODIFY `MaThucDon` int(5) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `trangthaiphieu`
--
ALTER TABLE `trangthaiphieu`
  MODIFY `MaTrangThai` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `cthoadon`
--
ALTER TABLE `cthoadon`
  ADD CONSTRAINT `cthoadon_ibfk_1` FOREIGN KEY (`MaHoaDon`) REFERENCES `hoadon` (`MaHoaDon`),
  ADD CONSTRAINT `cthoadon_ibfk_2` FOREIGN KEY (`MaPhieuDatMon`) REFERENCES `phieudatmon` (`MaPhieuDatMon`);

--
-- Constraints for table `ctphieudatmon`
--
ALTER TABLE `ctphieudatmon`
  ADD CONSTRAINT `ctphieudatmon_ibfk_1` FOREIGN KEY (`MaMonAn`) REFERENCES `monan` (`MaMonAn`),
  ADD CONSTRAINT `ctphieudatmon_ibfk_2` FOREIGN KEY (`MaPhieuDatMon`) REFERENCES `phieudatmon` (`MaPhieuDatMon`);

--
-- Constraints for table `ctthucdon`
--
ALTER TABLE `ctthucdon`
  ADD CONSTRAINT `ctthucdon_ibfk_1` FOREIGN KEY (`MaThucDon`) REFERENCES `thucdon` (`MaThucDon`),
  ADD CONSTRAINT `ctthucdon_ibfk_2` FOREIGN KEY (`MaMonAn`) REFERENCES `monan` (`MaMonAn`);

--
-- Constraints for table `danhgia`
--
ALTER TABLE `danhgia`
  ADD CONSTRAINT `danhgia_ibfk_1` FOREIGN KEY (`MaPhieuDatMon`) REFERENCES `phieudatmon` (`MaPhieuDatMon`);

--
-- Constraints for table `dexuatmon`
--
ALTER TABLE `dexuatmon`
  ADD CONSTRAINT `dexuatmon_ibfk_1` FOREIGN KEY (`MaNV`) REFERENCES `nhanvien` (`MaNV`);

--
-- Constraints for table `dinhluong`
--
ALTER TABLE `dinhluong`
  ADD CONSTRAINT `dinhluong_ibfk_1` FOREIGN KEY (`MaMonAn`) REFERENCES `monan` (`MaMonAn`),
  ADD CONSTRAINT `dinhluong_ibfk_2` FOREIGN KEY (`MaNVL`) REFERENCES `nguyenvatlieu` (`MaNVL`);

--
-- Constraints for table `hoadon`
--
ALTER TABLE `hoadon`
  ADD CONSTRAINT `hoadon_ibfk_1` FOREIGN KEY (`MaNV`) REFERENCES `nhanvien` (`MaNV`);

--
-- Constraints for table `loaimonan`
--
ALTER TABLE `loaimonan`
  ADD CONSTRAINT `loaimonan_ibfk_1` FOREIGN KEY (`MaLoai`) REFERENCES `monan` (`LoaiMonAn`);

--
-- Constraints for table `nhanvien`
--
ALTER TABLE `nhanvien`
  ADD CONSTRAINT `nhanvien_ibfk_1` FOREIGN KEY (`ChucVu`) REFERENCES `chucvu` (`MaChucVu`);

--
-- Constraints for table `phieudatmon`
--
ALTER TABLE `phieudatmon`
  ADD CONSTRAINT `phieudatmon_ibfk_1` FOREIGN KEY (`MaTrangThai`) REFERENCES `trangthaiphieu` (`MaTrangThai`),
  ADD CONSTRAINT `phieudatmon_ibfk_2` FOREIGN KEY (`MaNV`) REFERENCES `nhanvien` (`MaNV`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
