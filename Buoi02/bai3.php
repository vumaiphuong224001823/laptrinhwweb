<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <title>Tính tiền tài liệu</title>
</head>
<body>

<form method="post">

    <label>Tên tài liệu:</label>
    <input type="text" name="tenTaiLieu" required>

    <label>Đơn giá:</label>
    <input type="number" name="donGia" min="0" required>

    <label>Số lượng:</label>
    <input type="number" name="soLuong" min="1" required>

    <button type="submit">Tính</button>

</form>

<?php
if (isset($_POST['tenTaiLieu'])) {

    $tenTaiLieu = $_POST['tenTaiLieu'];
    $donGia = $_POST['donGia'];
    $soLuong = $_POST['soLuong'];

    $tongTien = $donGia * $soLuong;

    echo "<h3>KẾT QUẢ</h3>";
    echo "Tên tài liệu: $tenTaiLieu <br>";
    echo "Tổng tiền: $tongTien đồng";
}
?>

</body>
</html>