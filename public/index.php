<!-- File điều hướng đầu tiên khi truy cập vào web -->

<?php
// Chuyển hướng đến một trang cụ thể
function redirect($url) {
    header("Location: $url");
    exit();
}

// Sử dụng hàm redirect để chuyển hướng đến trang khác
$new_page = "..\\app\\views\\index.php"; // Thay thế "new_page.php" bằng URL của trang bạn muốn chuyển hướng đến
redirect($new_page);
?>