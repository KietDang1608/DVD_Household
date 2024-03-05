<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        require_once '..\\models\\product.php';

        // Khởi tạo một đối tượng QueryManager
        $queryManager = new ProductModel();

        // Gọi phương thức để lấy dữ liệu từ bảng 'your_table'
        $data = $queryManager->getAllData();

        // Hiển thị dữ liệu
        foreach ($data as $row) {
            echo "ID: " . $row["ma_loai"] . " - Tên: " . $row["ten_loai"] . "<br>";
        }
    ?>
</body>
</html>