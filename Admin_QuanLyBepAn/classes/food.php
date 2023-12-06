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

    public function getStatus()
    {
    }


    public function addFood($data, $file)
    {
        $tenmon = $data['tenmon'];
        $thanhphan = $data['thanhphan'];
        $mota = $data['mota'];
        $giaban = $data['gia'];
        $image = $file['name'];
        $chiphi = $data['chiphi'];
        $loai = $data['loai'];
        $sql = "insert into monan(TenMonAn,ThanhPhan,MoTa,HinhAnh,GiaTien,ChiPhi,LoaiMonAn) values ('$tenmon','$thanhphan','$mota','$image','$giaban','$chiphi','$loai');";
        $insert = $this->db->insert($sql);
        if ($insert) {
            move_uploaded_file($file['tmp_name'], './uploads/' . $image);
            return true;
        } else {
            return false;
        }
    }

    public function updateStatus($id, $value)
    {
        $sql = "UPDATE monan SET TrangThai = '$value' WHERE MaMonAn = '$id'";
        $update = $this->db->update($sql);
        if ($update) {
            return true;
        } else {
            return false;
        }
    }

    public function updateFood($data, $file)
    {
        // var_dump($file);
        // var_dump($data);
        if ($file['name'] != "") {
            $id = $data['id'];
            $tenmon = $data['tenmon'];
            $thanhphan = $data['thanhphan'];
            $mota = $data['mota'];
            $giaban = $data['gia'];
            $image = $file['name'];
            $chiphi = $data['chiphi'];
            $loai = $data['loai'];
            $sql = "update monan set TenMonAn='$tenmon',ThanhPhan='$thanhphan',MoTa='$mota',HinhAnh='$image',GiaTien='$giaban',ChiPhi='$chiphi',LoaiMonAn='$loai' WHERE MaMonAn='$id'";
            $update = $this->db->update($sql);
            if ($update && move_uploaded_file($file['tmp_name'], 'uploads/' . $image)) {
                return true;
            } else {
                return false;
            }
        } else {
            $id = $data['id'];
            $tenmon = $data['tenmon'];
            $thanhphan = $data['thanhphan'];
            $mota = $data['mota'];
            $giaban = $data['gia'];
            $image = $file['name'];
            $chiphi = $data['chiphi'];
            $loai = $data['loai'];
            $sql = "update monan set TenMonAn='$tenmon',ThanhPhan='$thanhphan',MoTa='$mota',GiaTien='$giaban',ChiPhi='$chiphi',LoaiMonAn='$loai' WHERE MaMonAn='$id'";
            $update = $this->db->update($sql);
            if ($update) {
                return true;
            } else {
                return false;
            }
        }
    }
}


?>