<?php
require_once('database.php');

?>

<?php
class OrderDishes
{
    private $db;
    public function __construct()
    {
        $this->db = new Database();
    }

    public function getAllOrderDishes($maNV)
    {
        $sql = "SELECT * FROM phieudatmon, ctphieudatmon, nhanvien 
            where ctphieudatmon.MaPhieuDatMon = phieudatmon.MaPhieuDatMon AND phieudatmon.MaNV = nhanvien.MaNV";

        $result = $this->db->select($sql);
        if ($result->num_rows > 0) {
            return $result;
        } else {
            return false;
        }
    }
    public function getOrderByNV($maNV)
    {
        $sql = "SELECT * FROM phieudatmon 
        JOIN ctphieudatmon ON phieudatmon.MaPhieuDatMon = ctphieudatmon.MaPhieuDatMon 
        JOIN monan ON ctphieudatmon.MaMonAn = monan.MaMonAn
        JOIN trangthaiphieu ON trangthaiphieu.MaTrangThai = phieudatmon.MaTrangThai 
        WHERE phieudatmon.MaNV = " . $maNV . " ORDER BY NgayDat DESC";

        return $this->db->select($sql) ? $this->db->select($sql) : false;
    }

    public function getOrderByID($id)
    {
        $sql = "SELECT * FROM phieudatmon 
        JOIN ctphieudatmon ON phieudatmon.MaPhieuDatMon = ctphieudatmon.MaPhieuDatMon 
        JOIN monan ON ctphieudatmon.MaMonAn= monan.MaMonAn
        JOIN trangthaiphieu ON trangthaiphieu.MaTrangThai = phieudatmon.MaTrangThai
        JOIN nhanvien ON phieudatmon.MaNV = nhanvien.MaNV
        WHERE phieudatmon.MaPhieuDatMon =" . $id;

        return $this->db->select($sql) ? $this->db->select($sql) : false;
    }
    public function get_Qty($maphieu)
    {
        $sql = "SELECT MaPhieuDatMon, COUNT(*) AS SoMon
        FROM ctphieudatmon
        WHERE MaPhieuDatMon = " . $maphieu . "
        GROUP BY MaPhieuDatMon;";
        return $this->db->select($sql) ? $this->db->select($sql) : false;
    }

    public function cancelOrder($idphieu)
    {
        $sql = "UPDATE `phieudatmon` SET `MaTrangThai` = '3' WHERE `phieudatmon`.`MaPhieuDatMon` = " . $idphieu;
        return $this->db->update($sql) ? true : false;
    }
    public function addFeedback($id, $feedback)
    {
        $sql = 'INSERT INTO `danhgia` (`MaPhieuDatMon`, `DanhGia`) VALUES  (' . $id . ',"' . $feedback . '" )';
        return $this->db->insert($sql);
    }
    public function getFeedbackById($id)
    {
        $sql = 'SELECT * FROM danhgia WHERE MaPhieuDatMon = ' . $id;

        // Call the select method once
        $result = $this->db->select($sql);
        if ($result) {
            return $result;
        } else {
            return false;
        }
    }

    public function getOrderSucces($maNV)
    {
        $sql = "SELECT *
        FROM phieudatmon
        JOIN ctphieudatmon ON phieudatmon.MaPhieuDatMon = ctphieudatmon.MaPhieuDatMon
        JOIN monan ON ctphieudatmon.MaMonAn = monan.MaMonAn
        JOIN trangthaiphieu ON trangthaiphieu.MaTrangThai = phieudatmon.MaTrangThai
        WHERE phieudatmon.MaNV = " . $maNV . "
          AND phieudatmon.MaTrangThai IN (1, 2)
        ORDER BY NgayDat DESC;";

        return $this->db->select($sql) ? $this->db->select($sql) : false;
    }
}


?>