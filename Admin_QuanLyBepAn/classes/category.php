<?php
include_once('database.php');
?>

<?php
class Loaimonan
{
    private $db;
    public function __construct()
    {
        $this->db = new Database();
    }

    public function getAllCategory()
    {

        $sql = "SELECT * FROM loaimonan";
        $result = $this->db->select($sql);
        if ($result->num_rows > 0) {
            return $result;
        } else {
            return false;
        }
    }

    public function getNameCategory($id)
    {
        $sql = "SELECT * FROM `loaimonan` where `MaLoai` = '$id'";
        $result = $this->db->select($sql);
        if ($result->num_rows > 0) {
            return $result->fetch_assoc()['TenLoai'];
        } else {
            return false;
        }
    }
}
?>