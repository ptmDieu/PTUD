<?php
require_once('database.php');

?>

<?php
class Recommend
{
    private $db;
    public function __construct()
    {
        $this->db = new Database();
    }
    public function addRecommend($idnv, $monan, $ghichu)
    {
        $sql = "INSERT INTO `dexuatmon` ( `MaNV`, `MonDeXuat`, `GhiChu`) 
        VALUES ( '$idnv', '$monan', '$ghichu')";
        $insert = $this->db->insert($sql);
        if ($insert) {
            return true;
        } else {
            return false;
        }
    }

    public function getRecommend()
    {
        $sql = "SELECT * FROM dexuatmon, nhanvien WHERE dexuatmon.MaNV = nhanvien.MaNV";
        $result = $this->db->select($sql);
        if ($result->num_rows > 0) {
            return $result;
        } else {
            return false;
        }
    }
    public function getAllRecommend($idnv)
    {
        $sql = "SELECT * FROM dexuatmon where MaNV=" . $idnv;
        return $this->db->select($sql) ? $this->db->select($sql) : false;
    }
}

?>