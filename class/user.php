<?php
require_once("database.php");
class User
{
    private $db;
    public function __construct()
    {
        $this->db = new Database();
    }

    public function login($username, $password)
    {
        $username = $this->db->link->real_escape_string($username);
        $password = $this->db->link->real_escape_string($password);
        $sql = "SELECT * FROM nhanvien WHERE MaNV='$username' AND MatKhau = '" . md5($password) . "' AND TrangThaiNV = '1' ";
        $data = $this->db->select($sql);
        return $data;
    }
}
