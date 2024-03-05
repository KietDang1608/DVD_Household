<?php
require_once '..\..\config\database.php';

class ProductModel {
    private $db;

    public function __construct() {
        $this->db = new Database();
    }

    public function getAllData() {
        $conn = $this->db->getConnection();
        // Viết câu truy vấn
        $sql = "SELECT * FROM loai";
        // Thực hiện truy vấn
        $result = $conn->query($sql);
        // Mảng chứa dữ liệu
        $data = array();
        if ($result->num_rows > 0) {
            // Duyệt qua từng dòng dữ liệu và thêm vào mảng
            while ($row = $result->fetch_assoc()) {
                $data[] = $row;
            }
        }
        // Đóng kết nối
        $this->db->closeConnection();

        return $data;
    }
    
}
?>