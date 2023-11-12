<?php
include_once('database.php');
?>

<?php
class Food
{
    private $db;
    public function __construct()
    {
        $this->db = new Database();
    }

    public function getAll()
    {
        $sql = "SELECT * FROM monan, loaimonan WHERE LoaiMonAn = MaLoai";
        $result = $this->db->select($sql);
        if ($result->num_rows > 0) {
            return $result;
        } else {
            return false;
        }
    }
    public function getDishByID($id)
    {
        $sql = "SELECT *FROM monan WHERE MaMonAn = " . $id;
        return $this->db->select($sql) ? $this->db->select($sql) : false;
    }
    public function getFoodCost($id)
    {
        $sql = "SELECT * FROM nguyenvatlieu, monan, dinhluong WHERE monan.MaMonAn = dinhluong.MaMonAn AND 
        nguyenvatlieu.MaNVL = dinhluong.MaNVL AND  dinhluong.MaMonAn =" . $id;
        $result = $this->db->select($sql);
        return $result ? $result : false;
    }
}


?>