<?php

include_once 'database.php';
?>
<?php
class Cart
{
    private $db;
    public function __construct()
    {
        $this->db = new Database();
    }

    public function add_to_cart($id, $qty)
    {

        //save cart to database
        $quantity = 0;
        if (isset($_COOKIE['maNV'])) {
            $makh = $_COOKIE['maNV'];
            $sql = "SELECT * FROM giohang WHERE MaNV = '$makh' AND MaMonAn = '$id' ";
            $result = $this->db->select($sql);
            if ($result != null && $result->num_rows > 0) {
                $sql = "UPDATE giohang SET SoLuong=SoLuong+'$qty' WHERE MaMonAn='$id' AND MaNV='$makh' ";
                $this->db->update($sql);
            } else {
                $sql = "INSERT INTO giohang (MaNV,MaMonAn,SoLuong) VALUES('$makh','$id','$qty')";
                $this->db->insert($sql);
            }
            $quantity = $this->db->select("SELECT SUM(SoLuong) FROM giohang WHERE MaNV = '$makh'")->fetch_assoc()['SUM(SoLuong)'];
        } else {
            $idCart = $_COOKIE['idCart'];
            $sql = "SELECT * FROM giohang WHERE id='$idCart' AND MaMonAn = '$id' ";
            $result = $this->db->select($sql);
            if ($result != null && $result->num_rows > 0) {
                $sql = "UPDATE giohang SET SoLuong=SoLuong+'$qty' WHERE MaMonAn='$id' AND id='$idCart' ";
                $this->db->update($sql);
            } else {
                $sql = "INSERT INTO giohang (id,MaMonAn,SoLuong) VALUES('$idCart','$id','$qty')";
                $this->db->insert($sql);
            }
            $quantity = $this->db->select("SELECT SUM(SoLuong) FROM giohang WHERE id = '$idCart'")->fetch_assoc()['SUM(SoLuong)'];
        }
        echo ($quantity);
    }


    public function get_quantity_product_cart()
    {
        $qty = 0;
        if (isset($_COOKIE['maNV'])) {
            $qty = $this->db->select("SELECT SUM(SoLuong) FROM giohang WHERE MaNV = '$_COOKIE[maNV]'")->fetch_assoc()['SUM(SoLuong)'];
        } else {
            $idCart = isset($_COOKIE['idCart']) ? $_COOKIE['idCart'] : null;
            $qty = $this->db->select("SELECT SUM(SoLuong) FROM giohang WHERE id = '$idCart'")->fetch_assoc()['SUM(SoLuong)'];
        }
        return $qty != null ? $qty : 0;
    }

    public function getAll()
    {
        if (isset($_COOKIE['maNV'])) {
            $makh = $_COOKIE['maNV'];
            $sql = "SELECT * FROM giohang,monan WHERE giohang.MaMonAn = monan.MaMonAn AND MaNV = '$makh'";
        } else {
            $idCart = isset($_COOKIE['idCart']) ? $_COOKIE['idCart'] : '';
            $sql = "SELECT * FROM giohang, monan WHERE giohang.MaMonAn = monan.MaMonAn AND id='$idCart'";
        }

        $result = $this->db->select($sql);
        return $result ? $result : false;
    }

    public function get_total()
    {
        if (isset($_COOKIE['maNV'])) {
            $makh = $_COOKIE['maNV'];
            $sql = "SELECT SUM(monan.GiaTien * giohang.SoLuong) AS Total FROM giohang JOIN monan ON giohang.MaMonAn = monan.MaMonAn
            WHERE giohang.MaNV = '$makh'";
        } else {
            $idCart = $_COOKIE['idCart'];
            $sql =  "SELECT SUM(monan.GiaTien * giohang.SoLuong) AS Total FROM giohang JOIN monan ON giohang.MaMonAn = monan.MaMonAn
            WHERE giohang.id ='$idCart'";
        }
        $result = $this->db->select($sql)->fetch_assoc()['Total'];
        return $result ? $result : 0;
    }

    public function delete_dish_cart($id)
    {
        if (isset($_COOKIE['maNV'])) {
            $makh = $_COOKIE['maNV'];
            $sql = "DELETE FROM giohang WHERE MaGioHang = '$id' ";
        } else {
            $idCart = $_COOKIE['idCart'];
            $sql = "DELETE FROM giohang WHERE MaGioHang = '$id'";
        }
        return $this->db->delete($sql) ? true : false;
    }
    public function delete_all($makh)
    {
        if (isset($_COOKIE['idCart'])) {
            $makh = $_COOKIE['maNV'];
            $idCart = $_COOKIE['idCart'];
            $sql = "DELETE FROM giohang WHERE id = '$idCart' ";
        } else {
            $sql = "DELETE FROM tbl_giohang WHERE MaNV =''";
        }
        return $this->db->delete($sql) ? true : false;
    }
    public function update_cart($idCart, $qty)
    {
        if (isset($_COOKIE['maNV'])) {
            $makh = $_COOKIE['maNV'];
            $sql = "UPDATE giohang SET SoLuong = '$qty' WHERE MaGioHang = '$idCart' AND MaNV = '$makh'";
        } else {
            $idTmp = $_COOKIE['idCart'];
            $sql = "UPDATE giohang SET SoLuong = '$qty' WHERE MaGioHang = '$idCart' AND id = '$idTmp'";
        }
        return $this->db->update($sql) ? true : false;
    }

    // public function add($makh, $tongtien, $cart, $address, $name, $phone, $note)
    // {
    //     $sql = "INSERT INTO tbl_donhang (MaKhachHang,TongTien,TenNguoiNhan,SDTNguoiNhan,DiaChiNguoiNhan) 
    //     VALUES('$makh','$tongtien','$name','$phone','$address')";
    //     $this->db->insert($sql);
    //     $last_id = $this->db->last_id();
    //     if ($cart != null) {
    //         foreach ($cart as $item) {
    //             $sql = 'INSERT INTO `tbl_chitietdonhang` ( `MaDonHang`, `GhiChu`, `MaSanPham`, `SoLuongSP`,`SizeSanPham`)
    //             VALUES (' . $last_id . ',"' . $note . '",' . $item['MaSanPham'] . ',' . $item['SoLuong'] . ',' . $item['SizeSP'] . ')';
    //             $this->db->insert($sql);
    //         }
    //     }
    //     $sql = "DELETE FROM tbl_giohang WHERE MaKhachHang='$makh'";
    //     $this->db->delete($sql);
    //     return true;
    // }
    public function add_Order($maNV, $tongtien, $cart, $ghichu)
    {
        $sql = "INSERT INTO phieudatmon (MaNV,TongTien)
        Value('$maNV','$tongtien') ";
        $this->db->insert($sql);
        $last_id = $this->db->last_id();
        if ($cart != null) {
            foreach ($cart as $item) {
                $sql = 'INSERT INTO `ctphieudatmon` ( `MaPhieuDatMon`, `MaMonAn`, `SoLuong`,`GhiChu`)
                VALUES (' . $last_id . ',' . $item['MaMonAn'] . ',' . $item['SoLuong'] . ',"' . $ghichu . '")';
                $this->db->insert($sql);
            }
        }
        $sql = "DELETE FROM giohang WHERE MaNV='$maNV'";
        $this->db->delete($sql);
        return true;
    }
    public function checkCart()
    {
        $maNV = "";
        if (isset($_SESSION['MaNV'])) {
            $maNV = $_SESSION['MaNV'];
        }

        $sql = 'SELECT * FROM giohang WHERE id = "' . $_COOKIE['idCart'] . '" OR MaNV = "' . $maNV . '"';

        $result = $this->db->select($sql);
        if ($result) {
            // var_dump(mysqli_fetch_array($result)['NgayTao'], date('Y-m-d'));
            // Chuyển đổi ngày thành timestamp
            $timestamp1 = strtotime(mysqli_fetch_array($result)['NgayTao']);
            $timestamp2 = strtotime(date('Y-m-d'));

            // So sánh các timestamp
            if ($timestamp1 < $timestamp2) {
                // echo "$date1 is earlier than $date2";
                $sql = 'DELETE FROM giohang WHERE id ="' . $_COOKIE['idCart'] . '" OR MaNV="' . $maNV . '"';
                $this->db->delete($sql);
            }
        }
    }
}

?>