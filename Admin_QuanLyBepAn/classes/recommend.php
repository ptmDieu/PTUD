<?php
include('database.php');

?>

<?php
class Recommend
{
    private $db;
    public function __construct()
    {
        $this->db = new Database();
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
}

?>