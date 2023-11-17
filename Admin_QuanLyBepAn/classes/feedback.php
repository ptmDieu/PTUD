<?php
include('database.php')
?>

<?php
class FeedBack
{
    private $db;

    public function __construct()
    {
        $this->db = new Database();
    }

    public function getFeedback()
    {
        $sql = "SELECT *FROM danhgia, nhanvien, phieudatmon WHERE 
        danhgia.MaPhieuDatMon= phieudatmon.MaPhieuDatMon AND phieudatmon.MaNV = nhanvien.MaNV";

        $result = $this->db->select($sql);
        if ($result != "") {
            return $result;
        } else {
            return false;
        }
    }
}


?>