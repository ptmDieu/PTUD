<?php
include_once('database.php');
?>

<?php
class Monan
{
    private $db;
    public function __construct()
    {
        $this->db = new Database();
    }

    public function getAll()
    {
        $sql = "SELECT * FROM `monan` WHERE TrangThai = 1";
        $result = $this->db->select($sql);
        if ($result->num_rows > 0) {
            return $result;
        } else {
            return false;
        }
    }

    public function getFoodById($id)
    {
        $sql = " SELECT * FROM monan, loaimonan WHERE MaLoai = LoaiMonAn AND TrangThai = 1 AND MaMonAn =" . $id;
        $result = $this->db->select($sql);
        if ($result->num_rows > 0) {
            return $result;
        } else {
            return false;
        }
    }

    public function getMenuById($date)
    {
        $sql = "SELECT * from ctthucdon,monan,thucdon WHERE ctthucdon.MaMonAn = monan.MaMonAn AND 
        ctthucdon.MaThucDon = thucdon.MaThucDon AND thucdon.ngay = '" . $date . "'";
        $result = $this->db->select($sql);
        return $result ? $result : false;
    }
}

?>