<?php
include('database.php');

?>

<?php
class OrderDishes
{
    private $db;
    public function __construct()
    {
        $this->db = new Database();
    }

    public function getAllOrderDishes()
    {
        $sql = "SELECT * FROM phieudatmon, ctphieudatmon, nhanvien, trangthaiphieu
            where ctphieudatmon.MaPhieuDatMon = phieudatmon.MaPhieuDatMon AND phieudatmon.MaNV = nhanvien.MaNV AND phieudatmon.MaTrangThai = trangthaiphieu.MaTrangThai ORDER BY NgayDat DESC";

        $result = $this->db->select($sql);
        if ($result->num_rows > 0) {
            return $result;
        } else {
            return false;
        }
    }

    public function getOrderByID($id)
    {
        $sql = "SELECT * FROM phieudatmon, ctphieudatmon, monan
        where ctphieudatmon.MaPhieuDatMon = phieudatmon.MaPhieuDatMon AND ctphieudatmon.MaMonAn= monan.MaMonAn 
        AND phieudatmon.MaPhieuDatMon =" . $id;

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
}


?>