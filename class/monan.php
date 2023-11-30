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

    public function getAll($star)
    {
        $sql = "SELECT * FROM `monan` WHERE TrangThai = 1 LIMIT $star,6";
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

    public function getMenuById($date, $star, $perPage)
    {
        $sql = "SELECT * from ctthucdon,monan,thucdon WHERE ctthucdon.MaMonAn = monan.MaMonAn AND 
        ctthucdon.MaThucDon = thucdon.MaThucDon AND thucdon.ngay = '" . $date . "' LIMIT $star, $perPage";
        $result = $this->db->select($sql);
        return $result ? $result : false;
    }

    public function getNumRowMenu($date)
    {
        $sql = "SELECT * from ctthucdon,monan,thucdon 
        WHERE ctthucdon.MaMonAn = monan.MaMonAn AND 
        ctthucdon.MaThucDon = thucdon.MaThucDon AND thucdon.ngay = '" . $date . "'";
        $result = $this->db->get_NumRow($sql);
        if ($result) {
            return $result;
        }
    }

    public function get_dish_by_category($category, $star, $perPage)
    {
        $sql = "SELECT * FROM `monan` WHERE LoaiMonAn = '$category' AND TrangThai = 1 LIMIT $star,$perPage";
        // var_dump($sql);
        $result = $this->db->select($sql);
        if ($result && $result->num_rows > 0) {
            return $result;
        } else {
            return false;
        }
    }


    public function getNumRowCategory($category)
    {

        $sql = "SELECT * FROM `monan` WHERE LoaiMonAn = '$category' AND TrangThai = 1";
        $result = $this->db->get_NumRow($sql);
        if ($result) {
            return $result;
        }
    }


    public function searchDish($key)
    {
        $sql = "SELECT * FROM `monan` WHERE TenMonAN LIKE '%$key%'";
        $result = $this->db->select($sql);

        if ($result && $result->num_rows > 0) {
            return $result;
        } else {
            return false;
        }
    }

    public function getNumRow()
    {
        $sql = "SELECT *from monan where trangthai = 1";
        $result = $this->db->get_NumRow($sql);
        if ($result) {
            return $result;
        }
    }
}

?>